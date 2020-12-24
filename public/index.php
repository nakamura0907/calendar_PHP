<?php

  if (isset($_GET['ym'])){
    $ym = $_GET['ym'];
  } else {
    $ym = date('Y-m');
  }
  $timestamp = strtotime($ym . '-01');
    if($timestamp === false){
      $ym = date('Y-m');
      $timestamp = strtotime($ym . '-01');
  }

  $nowYear=date('Y',strtotime($ym));
  $nowMonth=date('m',strtotime(($ym)));
  $lDay=date('d',strtotime('last day of '.$ym));
  $fDate=date('w',strtotime('first day of '.$ym));
  $lDate=date('w',strtotime('last day of'.$ym));

  $prev = date('Y-m', strtotime('-1 month', $timestamp));
  $next = date('Y-m', strtotime('+1 month', $timestamp));

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header class="header l-flex l-around">

    <h1 class="header__title">Calendar</h1>

    <nav class="header__nav">
      <ul class="header__list list" id="navigation">
        <li class="list__item"><a href="https://github.com/nakamura0907" target="_blank">nakamura0907</a></li>
        <li class="list__item"><a href="https://github.com/reonroen" target="_blank">reonroen</a></li>
      </ul>
      <i class="header__hamburger fas fa-bars" id="hamburger"></i>
    </nav>

  </header>


  <main class="main">
    <div class="main__container l-flex l-around">
      <a href="?ym=<?php echo $prev; ?>">&lt;&lt;</a>
      <h2 class="main__title"><?php echo $nowYear; ?>年<?php echo $nowMonth; ?>月</h2>
      <a href="?ym=<?php echo $next; ?>">&gt;&gt;</a>
    </div>
    <table class="table">
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
      <tr>
        <?php
          for ($i=0; $i<$fDate; $i++) {
            echo "<td></td>";
          }
          for ($i=1; $i<=$lDay; $i++) {
            if (($fDate == 0) && ($i % 7 == 1)) {
              echo "</tr><tr>";
            }
            if (($fDate == 1) && ($i % 7 == 0)) {
              echo "</tr><tr>";
            }
            if ($i % 7 == 8 - $fDate ) {
              echo "</tr><tr>";
            }
            echo "<td>" . $i . "</td>";
          }
          for($i=0;$i<6-$lDate;$i++){
            echo "<td></td>";
          }
        ?>
      </tr>
    </table>
  </main>


  <footer class="footer">
    <small class="footer__copyright">&copy; Copyright 2020 Calendar. All rights reserved.</small>
  </footer>

<script src="./js/script.js"></script>
</body>
</html>