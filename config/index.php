<?php
//idex main module
?>

<!DOCTYPE html>
<?php include ('head.php')?>
<?php
$webinfofile=fopen('webinfo.ini','r+b');
$web_info=explode('•←¶§→•',fread($webinfofile,'1000'));
$title=$web_info[0];
$year=$web_info[1];
$copyright=$web_info[2];
$author=$web_info[3];
$persist='savesettings.php';

if(isset($_GET['reason'])){
    $reason=$_GET['reason'];
    if ($reason=='logout'){
        setcookie('loggin_status','FALSE',-1);
        unset($_COOKIE['loggin_status']);
    }
}

if (isset($_COOKIE['loggin_status'])){
    //echo $_COOKIE['loggin_status'];
    if ($_COOKIE['loggin_status']=='TRUE')
    $logged='TRUE';
}else{
    //$logged='FALSE';
}

if (isset($_POST['user']) and isset($_POST['password'])){
    $user=$_POST['user'];
    $password=$_POST['password'];

    if(file_exists('users/'.base64_encode($user))){
        $usrTemFile = file_get_contents('users/'.base64_encode($user));
        $usrFile = explode(';',$usrTemFile);
        $psscompare = base64_decode($usrFile[0]);
        $usrRol = base64_decode($usrFile[1]);
        $usrName = base64_decode($usrFile[2]);
        $usrPower = base64_decode($usrFile[3]);
    }

    if (isset($psscompare)){
        if ($password == $psscompare){
            $logged = 'TRUE';
            setcookie('loggin_status','TRUE',0);
            setcookie('username',$user,0);
            setcookie('userrol',$usrRol,0);
            setcookie('usercname',$usrName,0);
            setcookie('userpower',$usrPower,0);
            unset ($_COOKIE['loggin_status']);
            unset ($_COOKIE['username']);
            unset ($_COOKIE['userrol']);
            unset ($_COOKIE['usercname']);
            unset ($_COOKIE['userpower']);
        }else{
            unset ($_COOKIE['loggin_status']);
            setcookie('loggin_status','FALSE',-1);
            unset ($_COOKIE['username']);
            setcookie('username','¿?',-1);
            unset ($_COOKIE['userrol']);
            setcookie('userrol','¿?',-1);
            unset ($_COOKIE['usercname']);
            setcookie('usercname','¿?',-1);
            unset ($_COOKIE['userpower']);
            setcookie('userpower','¿?',-1);
            
            $pss_msg='FALSE';
        }
    }else{
        $pss_msg='FALSE';
    }

    if(isset($pss_msg)){
        if ($pss_msg=='FALSE'){
            $logmsg = '⚠ Usuario o contraseña incorrectos';
        }
    }

}

if (isset($logged)){
    if ($logged == 'TRUE');{
        include ('gui.php');
    }
}else{
    include ('loginform.php');
}