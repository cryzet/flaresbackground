<?php
if (isset($_POST['n-user'])){
    $nUser=$_POST['n-user'];
}

$spc = 'FALSE';

if (isset($_POST['n-password'])){
    $nPassword=$_POST['n-password'];
    if ($nPassword==''){
        $spc = 'FALSE';
    }else{
        $spc = 'TRUE';
    }
}else{
    $spc = 'FALSE';
}

if (isset($_POST['n-rol'])){
    $nRol=$_POST['n-rol'];
}

if (isset($_POST['user-name'])){
    $nName = $_POST['user-name'];
}

if (isset($_POST['sps'])){
    $sps=base64_decode($_POST['sps']);
}

if (isset($_POST['old-password'])){
    $oldPassword = $_POST['old-password'];
}

if (isset($_POST['usrPower'])){
    $usrPower = $_POST['usrPower'];
}

if (file_exists('users/'.base64_encode($nUser))){
    $status='match';
    echo $status;
}else{
    $status='dismatch';
    echo $status;
}

echo '<br>';

if ($oldPassword == $sps and $spc == 'TRUE'){
    $pch='&st=pch';

}else{
    $pch='&st=pnch&';
    $nPassword = $sps;
}

echo '<br>';
echo 'Información Anterior';
echo '<br>';
$oldinfo = file_get_contents('users/'.base64_encode($nUser));
$oldinfo = explode(';',$oldinfo);
foreach ($oldinfo as $oldinfo2){
    echo base64_decode($oldinfo2).'<br>';
}

echo '<br>';
echo 'LINE: '.$nUser.'; '.$nPassword.'; '.$nRol.'; '.$nName.'; '.$usrPower.'<br>';
file_put_contents('users/'.base64_encode($nUser),base64_encode($nPassword).';'.base64_encode($nRol).';'.base64_encode($nName).';'.base64_encode($usrPower));

header('location:profile.php?detail='.base64_encode($nUser).$pch);
