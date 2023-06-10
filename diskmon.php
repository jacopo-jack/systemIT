<!DOCTYPE html>
<html>
<head>
    <title>Diskmon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            text-align: center;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .container {
            padding-top: 40px;
            padding-left: 160px;
        }
    </style>
</head>
<body>
<nav class="sidebar" style="background-color: aqua;">
    <div class="content">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="index.html" style="color: black; cursor:crosshair">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="taskman.php" style="color: black; cursor:crosshair">Task_Manager</a>
            </li>
            <li class="nav-item">
                <a href="diskmon.php" style="color: black; cursor:crosshair">Disk_Monitor</a>
            </li>
            <li class="nav-item">
                <a href="taskman.php" style="color: black; cursor:crosshair">Cmd</a>
            </li>
            <li class="nav-item">
                <a href="diskpart.php" style="color: black; cursor:crosshair">Diskpart</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        // Include il file contenente le funzioni
        include 'diskmon_functions.php';

        // Chiamata alla funzione per ottenere le informazioni sui dischi
        $diskInfo = getDiskInformation();

        // Mostra le informazioni sui dischi
        foreach ($diskInfo as $disk) {
            $name = $disk['name'];
            $spaceMB = $disk['spaceMB'];
            $spaceGB = $disk['spaceGB'];
            $freeSpaceMB = $disk['freeSpaceMB'];
            $freeSpaceGB = $disk['freeSpaceGB'];

            echo '<div class="col-4">';
            echo '<h3>Spazio occupato su ' . $name . ':</h3>';
            echo '<p>' . $spaceMB . ' MB (' . $spaceGB . ' GB)</p>';
            echo '<h4>Spazio libero su ' . $name . ':</h4>';
            echo '<p>' . $freeSpaceMB . ' MB (' . $freeSpaceGB . ' GB)</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
</body>
</html>
