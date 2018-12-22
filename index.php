<?php  require_once('validation_functions.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Validation</title>
  </head>
  <body>

    <p>
      <?php
        $var1 = "abcef";
        $var2 = "     ";
        $var3 = "0";
        $var4 = 1;
        $var5 = 0;

        echo hasPresence($var1) ? "Yes has presence" : "No, passing variable has no presence";
        echo hasPresence($var2) ? "Yes has presence" : "No, passing variable has no presence";
        echo hasPresence($var3) ? "Yes has presence" : "No, passing variable has no presence";
        echo hasPresence($var4) ? "Yes has presence" : "No, passing variable has no presence";
        echo hasPresence($var5) ? "Yes has presence" : "No, passing variable has no presence";
        echo "</br>";
        echo "</br>";


        $email = "abc@gmail.com";
        echo hasValidEmailFormat($email) ? "Yes, ".$email." is valid email format" : "No, ".$email." is NOT valid email";

       ?>
    </p>


  </body>
</html>
