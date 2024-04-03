<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <h1 class="mt-4 text-center text-white">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 
                i 1812 we dwunastu księgach wierszem 12</h1>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group">
				<a href="./" class="list-group-item list-group-item-action"><i class="bi bi-house-fill"></i> Strona główna</a>
                    <a href="#" class="list-group-item list-group-item-action disabled" aria-disabled="true">Spis treści</a>
				<?php
                    for ($i = 1; $i <= 12; $i++) {
                        //echo ('<a href="./k' . $i. '.html" class="list-group-item list-group-item-action">
						//Księga ' .$i. '</a>');
						echo ("<a href='./?k=$i' class='list-group-item list-group-item-action'>
					<i class='bi bi-bookmark-fill'></i> Księga $i</a>");
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-9">
					<?php
						if(isset($_GET['k'])) {
							include_once("k".$_GET['k'].".html");
						} 
						elseif(!empty($argv[1])) {
							include_once("k".$argv[1].".html");
						}
						else {
							echo "<img src='./pan_tadeusz.jpg' alt='Pan Tadeusz' class='img-fluid rounded'>";
						}
					?>
            </div>
        </div>
    </div>

    <footer class="text-center mt-4">
        <div class="container">
            <span class="text-muted font-weight-bold">Księgi: 1-12 | Autor: Tomasz Niżnik | Uczelnia: Akademia Nauk Stosowanych Nowy Targ</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
</html>
