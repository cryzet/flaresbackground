<?php
$path = 'themes/'.$theme.'/';
$i=0;?>
<!DOCTYPE HTML>
<html>
<?php include ($path.'include/head.php');?>
<body>
<header class="header float-top">
    <nav class="nav_bar" id="nav_bar1">
        <menu class="menu main_menu" id="main_menu">
            <!--<ul>
                    <li id="primera"><a href="index.php">Inicio</a></li>
                    <li style="vertical-align: middle; padding-left: 120px"><p>Inicio</p></li>
            </ul>-->
            <?php
                if ($subtitle!=='Inicio'){
                    echo('<div id="primera" align="left"><a href="index.php">&lt; Inicio</a></div>');
                }
            ?>
            <div id="subtitle" align="center"><p><?php echo $subtitle;?></p></div>
            <div id="exit-btn"><a href="index.php?reason=logout">Salir</a></div>
        </menu>
    </nav>
</header>
<div class="main_area">
    <!--Esta es el area principal-->
    <ul class="<?php echo($class);?>">
        <?php
        if($class=='photo_list'){
            foreach ($lista as $list_item) {
                echo '<li><div class="li-section">'.$thumbnail[$i].'</div></li>';
                $i=$i+1;
            }
        }else{
            foreach ($lista as $list_item) {
                echo '<li><div class="li-section">'.$thumbnail[$i].'</div><div class="li-section">'.$list_item.'</div></li>';
                $i=$i+1;
            }
        }

        ?>
    </ul>
    
</div>

<?php include ('include/footer.php')?>
<?php include ('assets/pic/flarebackground.html')?>

</body>
</html>