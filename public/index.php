<?php

  $month=1;
  $lDay=date('d',strtotime('last day of this month'));
  $fDate=date('w',strtotime('first day of this month'));

  $nowMonth=date('Y');
  $nowDay=date('m');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header class="header l-flex l-around">

    <h1 class="header__title">Calendar</h1>

    <nav class="header__nav">
      <ul class="header__list list l-flex">
        <li class="list__item"><a href="https://github.com/nakamura0907" target="_blank">nakamura0907</a></li>
        <li class="list__item"><a href="https://github.com/reonroen" target="_blank">reonroen</a></li>
      </ul>
    </nav>

  </header>


  <main class="main">
    <h2 class="main__title"><?php echo $nowMonth; ?>年<?php echo $nowDay; ?>月</h2>
    <table class="table">
      <tr>
        <?php
          for($i=0;$i<$fDate;$i++){
            echo "<td></td>";
          }
          for($i=1;$i<=$lDay;$i++){
            if($fDate==0&&$i%7==1){
              echo "</tr><tr>";
            }
            if($fDate==1&&$i%7==0){
              echo "</tr><tr>";
            }
            if($i%7==8-$fDate){
              echo "</tr><tr>";
            }
            echo "<td>".$i."</td>";
          }
        ?>
      </tr>
    </table>
  </main>


  <footer class="footer">
    <small class="footer__copyright">&copy; Copyright 2020 Calendar. All rights reserved.</small>
  </footer>
</body>
</html>