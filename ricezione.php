<?php

$ricerca=$_POST['ricerca'];

setcookie('preferenza',$ricerca,time()+3600);
echo $ricerca;
