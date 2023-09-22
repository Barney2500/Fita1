<?php
    $n = 10;
    $m = 10;
    $barcos = ['fragata' => 4   , 'submarino' => 3, 'destructor' => 2, 'portaaviones' => 1];
    $pos = random_int(1,2);
    $posfrag = [];
    $possub = [];
    $posdes = [];
    $posport = [];
    $coos = [];
    foreach ($barcos as $nav => $navq){
        $nex = 1;
        if($nav == 'fragata'){
            for ($na = 0; $na<$navq; $na++){
                    do{
                        $x = [random_int(1,10),random_int(1,10)];
                        if(empty($posfrag)){
                            break;
                        }else{
                        foreach($posfrag as $coo){
                            if($x == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2;   
                            }
                        }
                    }
                    }while($nex == 1);
                    array_push($posfrag,$x);
                }
                    
            }
        
        if($nav == 'submarino'){
            for ($na = 0; $na<$navq; $na++){
                do{
                    $x = [random_int(1,10),random_int(1,10)];
                    if($pos == 1){
                        $y =[$x[0],$x[1]+1];
                    }else{
                        $y = [$x[0]+1,$x[1]];
                    }
                    if($x[0] == 10 && $pos == 1){
                        $x[0] = $x[0]-1;
                    }else if($x[1] == 10 && $pos == 2){

                    }
                    if(empty($possub)){
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2;   
                            }
                    }}else{
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2; 
                                foreach($possub as $coo){
                                    if($x == $coo || $y == $coo){
                                        $nex = 1;
                                    }else{
                                        $nex = 2; 
                                          
                                    }
                            }
                        }
                }
                }}while($nex == 1);
                array_push($possub,$x,$y);
            
        }}
        if($nav == 'destructor'){
            for ($na = 0; $na<$navq; $na++){
                do{
                    $x = [random_int(1,10),random_int(1,10)];
                    if($pos == 1){
                        $y =[$x[0],$x[1]+1];
                        $z = [$x[0],$x[1]+2];

                    }else{
                        $y = [$x[0]+1,$x[1]];
                        $z = [$x[0]+2,$x[1]];
                    }
                    if($x[0] == 10 && $pos == 1){
                        $x[0] = $x[0]-2;
                    }
                    if($x[0] == 9 && $pos == 1){
                        $x[0] == $x[0]-1;
                    }
                    if($x[1] == 10 && $pos == 2){
                        $x[0] == $x[0]-2;
                    }
                    if($x[1] == 9 && $pos == 2){
                        $x[0] == $x[0]-1;
                    }}
                }if(empty($possub)){
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2; 
                                foreach($possub as $coo){
                                    if($x == $coo || $y == $coo){
                                        $nex = 1;
                                    }else{
                                        $nex = 2; 
                                          
                                    }
                            }
                        }
                }
                    }else{
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2; 
                                foreach($possub as $coo){
                                    if($x == $coo || $y == $coo){
                                        $nex = 1;
                                    }else{
                                        $nex = 2; 
                                        foreach($posdes as $coo){
                                            if($x == $coo || $y == $coo){
                                                $nex = 1;
                                            }else{
                                                $nex = 2; 
                                            }
                                    }
                            }
                        }
                }
                }}while($nex == 1);
                array_push($posdes,$x,$y,$z);
            }
        }
        if($nav == 'portaaviones'){
            for ($na = 0; $na<$navq; $na++){
                do{
                    $x = [random_int(1,10),random_int(1,10)];
                    if($pos == 1){
                        $y =[$x[0],$x[1]+1];
                        $z = [$x[0],$x[1]+2];

                    }else{
                        $y = [$x[0]+1,$x[1]];
                        $z = [$x[0]+2,$x[1]];
                    }
                    if($x[0] == 10 && $pos == 1){
                        $x[0] = $x[0]-2;
                    }
                    if($x[0] == 9 && $pos == 1){
                        $x[0] == $x[0]-1
                    }
                    if($x[1] == 10 && $pos == 2){
                        $x[0] == $x[0]-2
                    }
                    if($x[1] == 9 && $pos == 2){
                        $x[0] == $x[0]-1
                    }
                    if(empty($possub)){
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2; 
                                foreach($possub as $coo){
                                    if($x == $coo || $y == $coo){
                                        $nex = 1;
                                    }else{
                                        $nex = 2; 
                                        foreach($posdes as $coo){
                                            if($x == $coo || $y == $coo){
                                                $nex = 1;
                                            }else{
                                                $nex = 2; 
                                                  
                                            }
                                    }
                                    }
                            }
                        }
                }
                    }}else{
                        foreach($posfrag as $coo){
                            if($x == $coo || $y == $coo){
                                $nex = 1;
                            }else{
                                $nex = 2; 
                                foreach($posdes as $coo){
                                    if($x == $coo || $y == $coo){
                                        $nex = 1;
                                    }else{
                                        $nex = 2; 
                                        foreach($possub as $coo){
                                            if($x == $coo || $y == $coo){
                                                $nex = 1;
                                            }else{
                                                $nex = 2;
                                                foreach($posport as $coo){
                                                    if($x == $coo || $y == $coo){
                                                        $nex = 1;
                                                    }else{
                                                        $nex = 2; 
                                                    }
                                            }
                                    }
                            }
                        }
                }
                }}while($nex == 1);
                array_push($posport,$x,$y,$z,$zx);
            }
        }

    }
    foreach($posfrag as $valal){
        array_push($coos,$valal);
        foreach($valal as $vaa){
        }
    }
    foreach($possub as $valal){
        array_push($coos,$valal);
        foreach($valal as $vaa){
        }
    }
    foreach($posdes as $valal){
        array_push($coos,$valal);
        foreach($valal as $vaa){
        }
    }foreach($posport as $valal){
        array_push($coos,$valal);
        foreach($valal as $vaa){
        }
    }
    foreach($coos as $valal){
        echo'(';
        foreach($valal as $vaa){
            echo $vaa.',';
        }
        echo')';
    }


    ?>
    
    <div style='display:flex;justify-content:center;align-items:center;'>
    <table style='border-collapse: collapse'>
            <?php
            $xx = 0;
            $yy = 0;
            for ($i=0; $i<$n; $i++){
                echo '<tr>';
                for ($a="A",$b=0; $b<$m; $b++){
                    if ($i == 0 && $b == 0) {    
                        echo "\t\t<td style='border: 3px solid #000;width:50px;height:50px;text-align:center;'> </td>\n";
                    } else{
                    if ($i == 0) {
                        echo "\t\t<td style='border: 3px solid blue;width:50px;height:50px;text-align:center;'>$a</td>\n";
                        $a++;
                    } elseif ($b == 0) {
                        echo "\t\t<td style='border: 3px solid red;width:50px;height:50px;text-align:center;'>$i</td>\n";
                    } else {
                        foreach($coos as $va){
                            if ($va[0]==$i && $va[1]==$b){
                                $xx = $va[0];
                                $yy = $va[1];
                            }
                        }
                        if ($xx == $i && $yy == $b){
                            echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'>X</td>\n";
                        }else{

                            echo "\t\t<td style='border: 1px solid #4f4f4f;width:50px;height:50px;text-align:center;'>&nbsp</td>\n";
                            $a++;
                        }

                    }
                }                
            }
                echo '</tr>';
            }
echo $kg;
            ?>
           
    </table>
    </div>  
    <br>
    <br>

    <?php
?>