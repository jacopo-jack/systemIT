
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    body{text-align: center;}
    .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
</style>
</head>
<body>
<nav  class="sidebar" style="background-color: aqua;">
<div class="content">
<ul class="nav flex-column">
            <li class="nav-item">
        <a href="index.html" style="color: black; cursor:crosshair">Dashboard</a>
</li>
            <li class="nav-item">
          <a href="taskman.php" style="color: black; cursor:crosshair">Task_Manager</p>
</li>
<li class="nav-item">
     <a href="diskmon.php"  style="color: black; cursor:crosshair">Disk_Monitor</a>
</li>
    </ul>
    </div>
</nav>
  <div class="row">
    <?php
    $action = $_GET['action'];
    $commands = array(
        'wmic bios get serialnumber' => 'Serial Number',
        'wmic logicaldisk' => 'Logical Disks',
        'wmic cdrom list' => 'CD/DVD Drives',
        'wmic diskdrive list' => 'Disk Drives',
        'wmic desktopmonitor list' => 'Monitors',
        'wmic logicaldisk list' => 'Logical Disks',
    );
    ?>
    <ul>
      <?php
      foreach ($commands as $command => $header) {
          echo '<li><h2>' . $header . '</h2></li>';
          echo '<div>';
          $result = shell_exec($command);
          // Elabora il risultato del comando come desiderato
          // ...
          echo $result;
          echo '</div>';
      }
      ?>
    </ul>
    </div>
</body>
</html>
