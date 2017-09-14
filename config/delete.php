<?php

if (isset($_COOKIE['username'])){
    $user=$_COOKIE['username'];
}

if (isset($_COOKIE['userrol'])){
    $usrRol=$_COOKIE['userrol'];
}

if (isset($_COOKIE['usercname'])){
    $usrName = $_COOKIE['usercname'];
}

if ($usrRol == 'client'){
    header ('location:profile.php?detail='.base64_encode($user));
}

if(isset($_GET['usrkey'])){
    $usrkey=$_GET['usrkey'];

    if(base64_decode($usrkey)==$user){
        header('location:manage-users.php?rst=0');
    }else{
        echo 'Se eliminará el usuario';
        system('del /f /q "users\\'.$usrkey.'"');
        header('location:manage-users.php?rst=1');
    }
}else{
    echo 'no definido'.$_GET['usrkey'];
}