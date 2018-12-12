<html>
<head>
  <meta charset="utf-8">
</head>
<body>
    <?php
    echo '<script>
          var char = window.prompt("Εισάγετε έναν χαρακτήρα", "");
          character= (char);
          </script>';
    echo '<p style="font-size:300%;"><strong> Ο παρακάτω πίνακας χρησιμοποιεί βρόχους επανάληψης </strong> </p>';
    echo '<table style="width:500;length:500;height:500;border:5px solid blue;border-spacing: 5px;">';
    for($i=0;$i<=9;$i++){
      echo '<tr>';
          if ($i%2==0) {
          for ($j=0; $j <10 ; $j++){
            echo '<td style="background-color:red;height:20px;text-align:center;"><script> document.write(character); </script></td>';
        } }else {
          for ($j=0; $j <10 ; $j++){
        echo '<td style="background-color:green;height:20px;"></td>';
        }
        }
      echo '</tr>';
    }
    echo '</table>';
    ?>
</html>
