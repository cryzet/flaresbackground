<?php
if (isset($_POST['n-user'])){
    $nUser=$_POST['n-user'];
}

if (isset($_POST['power'])){
    $power = $_POST['power'];
}

if (isset($_POST['n-password'])){
    $nPassword=$_POST['n-password'];
}

if (isset($_POST['n-rol'])){
    $nRol=$_POST['n-rol'];
}

if (isset($_POST['n-name'])){
    $nName = $_POST['n-name'];
}


echo $nUser.'; '.$nPassword.'; '.$nRol.' '.$power.' ';

if (file_exists('users/'.base64_encode($nUser))){
    $status='match';
    //echo $status;
}else{
    $status='dismatch';
    //echo $status;
}

echo '<br>';

if (isset($status)){
    if ($status == 'dismatch'){
        //echo ('users/'.base64_encode($nUser));
        //echo '<br>';
        file_put_contents('users/'.base64_encode($nUser),base64_encode($nPassword).';'.base64_encode($nRol).';'.base64_encode($nName).';'.base64_encode($power));
        header('Location: index.php?usr=mod&new='.base64_encode($nUser));
    }
}