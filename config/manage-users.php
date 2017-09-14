<!DOCTYPE html>

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



$webinfofile=fopen('webinfo.ini','r+b');
$web_info=explode('•←¶§→•',fread($webinfofile,'1000'));
$title=$web_info[0];
$year=$web_info[1];
$copyright=$web_info[2];
$author=$web_info[3];
$persist='savesettings.php';

if(isset($_GET['detail'])){
    $user=base64_decode($_GET['detail']);
}

if (isset($_COOKIE['loggin_status'])){
    $logged = $_COOKIE['loggin_status'];
}

if (isset($logged)){
    if ($logged == 'TRUE'){

        if (file_exists('users/'.base64_encode($user))){
            $usrTemFile = file_get_contents('users/'.base64_encode($user));
            $usrFile = explode(';',$usrTemFile);
            $psscompare = base64_decode($usrFile[0]);
            $usrRol = base64_decode($usrFile[1]);
            $usrName = base64_decode($usrFile[2]);
            $usrPower = base64_decode($usrFile[3]);
        }
        echo ('<html>');
        include ('head.php');
        include ('header.php');
        include ('manage-users.gui.php');
        echo ('</html>');
    } else {
        echo ('<html>');
        include ('head.php');
        include ('error.php');
        echo ('</html>');
    }

}
?>