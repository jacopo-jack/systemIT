
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            text-align: center;
        }
    </style>
</head>
<body>
<header style="background-color: aqua;">
    <a href="index.html" style="color: black; cursor:crosshair">Dashboard</a>
    <a href="taskman.php" style="color: black; cursor:crosshair">Task_Manager</a>
    <!--richiamo la shell di windows con tasklist /? nel caso ho bisogno di usare parametri p.e. tasklist /m-->
    <a href="shell.php">Cmd</a>
</header>
<div class="row">
    <?php
    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
    $commands = array(
        'tasklist' => 'Processi',
        'tasklist /apps' => 'Processi Windowstore',
    );
    ?>
    <ul>
        <?php
        foreach ($commands as $command => $header) {
            echo '<li><h2>' . $header . '</h2></li>';
            echo '<div>';
            echo '<pre>';
            $result = shell_exec($command);
            // Elabora il risultato del comando come desiderato
            // ...
            echo $result;
            echo '</pre>';
            echo '</div>';
        }
        ?>
    </ul>
</div>
<!--pulsante per filtrare processi-->
<div>
    <h2>Filtra Processi</h2>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Cerca processo" required="required">
        <button type="submit" name="filter">Filtra</button>
        <?php
        if (isset($_GET['filter'])) {
            $output = '';
            $searchTerm = $_GET['search'];
            if ($searchTerm !== '') {
                $output = shell_exec("tasklist /FI \"IMAGENAME eq $searchTerm\"");
                // Elabora il risultato del comando come desiderato
                // ...
            }
            echo '<pre>' . $output . '</pre>';
        }
        ?>
    </form>
</div>
</body>
</html>


     <!--pulsante per terminare processi da implementare se si vuole. Inserire qui il codice-->
</body>
</html>
