<nav>
    <div class="nav-wrapper blue blur-backdrop">
        <a href="index.php" class="brand-logo">C.Panel</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><img id="menu-icon" src="assets/icons/menu-button.png"></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="profile.php?detail=<?php echo base64_encode($user)?>"><?php echo $usrName?></a></li>
            <li><pre>   </pre></li>
            <?php
            if ($usrRol == 'admin'){
                echo ('<li><a href="manage-users.php">Gestionar Usuarios</a></li>');
            }
            ?>
            <li><a href="index.php?reason=logout">Salir</a></li>
        </ul>


        <ul class="side-nav collection" id="mobile-demo">
            <li><a href="profile.php?detail=<?php echo base64_encode($user)?>" class="collection"><b><?php echo $usrName?></b></a></li>

            <?php
            if ($usrRol == 'admin'){
                echo ('<li><a href="manage-users.php">Gestionar Usuarios</a></li>');
            }
            ?>
            <li><a class="red-text" href="index.php?reason=logout">Salir</a></li>
        </ul>


    </div>
</nav>