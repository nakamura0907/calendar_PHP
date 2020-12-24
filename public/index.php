<?php

  $month=1;
  $lDay=date('d',strtotime('last day of this month'));
  $fDate=date('w',strtotime('first day of this month'));

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
</head>
<body>
  <header class="header"></header>


  <main class="main">
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


  <footer class="footer"></footer>
</body>
</html>