<!DOCTYPE html>
<html lang="cs-cz">
      <head>
            <meta charset="UTF-8">
            <title>Czech variants of Good day! due to daily time.</title>
            <style>
			           body {
				                font-size: 1000%; 
				                background-color: #000000; 
				                color: #00FF00; 
				                text-align: center;
				              }
		        </style>
      </head>
      <body>
      <?php
            $time = date("H");
 
	          $t = date("g");
 
            $t2 = date("a");
 
            echo "Somewhere it is $t $t2. ";
 
	          if ($time >= "5" && $time <= "8") {
     
		              echo "Dobre rano!";
 
	          } else if ($time > "8" && $time <= "11") {
     
	                echo "Dobre dopoledne!";
 
	          } else if ($time > "11" && $time < "13") {
     
	                echo "Dobre poledne!";

            } else if ($time >= "13" && $time < "19") {
     
	                echo "Dobre odpoledne!";
 
            } else if ($time >= "19" && $time < "23") {
     
	                echo "Dobry vecer!";
 
            } else {
     
	                echo "Dobrou noc!";
            }
    ?>
    </body>
</html>
