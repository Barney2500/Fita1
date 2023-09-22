<?php

$users = ['pepe' => 1234, 'juan' => 4321];

?>

<h2>Login</h2>
<form action="" method = "POST">
    <input type="text" name="user" placeholder ="gato">
    <br>
    <br>
    <input type="password" name="pass">
    <br>
    <br>
    <input type="submit" >
</form>
<?php
$log = 0;
if(isset($_POST['user']) && isset($_POST['pass'])){
    foreach($users as $us => $pa){
        if($_POST['user'] == $us && $_POST['pass'] == $pa ){
            $log = 1;
            break;
        }else{
            $log = 2;
        }
    }
}
if($log == 1){
    echo "Logeado";
}else{
    echo "no";
}
?>