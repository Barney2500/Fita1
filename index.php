<?php
     $n = 10;
     $m = 10;
    echo 'Hola como estas <br> 2';
    echo '<input type="text" name="nombre"><br> <input type="button" >';
    echo 'hola'
    ?>
    
    <table style='border-collapse: collapse'>
            <?php
                for ($i=1; $i<=$n; $i++){
                    echo "<tr>";
                for ($j=1; $j<=$m; $j++){
                    echo "\t\t<td style='border: 1px solid #000';width:'20px;>$x</td>";                 
                }
                echo "</tr>";
            }
            ?>
    </table>

    <?php
?>