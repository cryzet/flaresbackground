<?php
$tema=$_POST['tema'];
$titulo=$_POST['title'];
$year=$_POST['year'];
$copy=$_POST['copy'];
$author=$_POST['author'];

//echo $logginstatus;

file_put_contents('skin.ini','theme:'.$tema);
file_put_contents('webinfo.ini',$titulo.'•←¶§→•'.$year.'•←¶§→•'.$copy.'•←¶§→•'.$author.'•←¶§→•otra');

header('Location: index.php?settings=saved');