<?php
         $num = $_POST['num1'];
           
    
           if ($num>0) {
               echo $num." é número positivo";
            }
            else if ($num<0) {
                echo $num." é número negativo";
            }
            else {
                echo $num." é número nulo";
            }

       ?>