<?php
if(isset($_COOKIE['visite'])){
    $numero_visite=(int)$_COOKIE['visite']+1;
}else{
    $numero_visite=1;
}
setcookie('visite',$numero_visite,time()+3600);
if($numero_visite==1){
    echo "<h2>Benvenuto!</h2>";
    echo "Nell'ultima ora hai visitato 1 volta";
}else{
    echo "<h2>Bentornato!</h2>";
    echo "Nell'ultima ora hai visitato : ".$numero_visite." volte";
}
