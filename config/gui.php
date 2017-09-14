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

?>
<!---->

<html>
<body>

<?php include ('header.php')?>

<div class="container">

    <div class="row" id="card-container">
        <div class="col s12 m8 offset-m2 l10 offset-l1">
            
            <!--TARJETA INFORMACIÓN-->
            <span class="grey-text">Información</span>
            <div class="row">
                <div class="card-container">
                    <div class="card white lighten-1">

                        <div class="card-content black-text">

                            <?php
                            if (isset($_GET['settings']))
                                if ($_GET['settings']=='saved'){
                                    echo '<div class="center-align">Se guardaron los cambios correctamente</div>';
                                }
                            ?>

                            <form name="box1" action="savesettings.php" method="post">
                                <div class="input-field">
                                    <input type="text" name="title" value="<?php echo $title?>">
                                    <label>Título del sitio</label>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="year" value="<?php echo $year?>">
                                    <label>Año</label>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="copy" value="<?php echo $copyright?>">
                                    <label>Símbolo de Copyright</label>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="author" value="<?php echo $author?>">
                                    <label>Autor</label>
                                </div>

                                <div class="input-field">
                                    <select name="tema">
                                        <option value="default">Tema Predeterminado</option>
                                        <?php
                                        $themes=(scandir('../themes'));
                                        foreach ($themes as $theme_list){
                                            if($theme_list=='.' or $theme_list=='..' or $theme_list=='default'){
                                                //esta sentencia es para ocultar los puntos.
                                            }else{
                                                echo '<option value="'.$theme_list.'">'.$theme_list.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <label>Tema</label>
                                </div>
                                <div class="right">
                                    <input type="submit" class="green-text" id="btn-guardar" value="Guardar">
                                </div>
                            </form>

                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CARD-->

            <!--TARJETA USUARIO-->
            <span class="grey-text" id="new-user">Nuevo Usuario</span>
            <div class="row">
                <div class="card-container">
                    <div class="card white lighten-1">



                        <div class="card-content black-text">

                            <?php

                            if (isset($_GET['new'])){
                                $nUser = base64_decode($_GET['new']);
                            }

                            if (isset($_GET['usr']))
                                if ($_GET['usr']=='mod'){

                                    echo ('
                                           <div class="card" align="center">
                                                <div class="card-content">
                                                    
                                                    <p>Se ha creado el usuario '.$nUser.'</p>
                                                    <br>
                                                    <a class="btn green waves-effect waves-light" href="index.php">Descartar</a>
                                                    
                                                </div>
                                            </div>
                                        ');

                                }
                            ?>

                            <form name="box2" action=".add-user.php" method="post">

                                <div class="input-field" id="input-name">
                                    <input type="text" value="" name="n-name" required>
                                    <label>Nombre</label>
                                </div>

                                <div class="input-field" id="input-usuario">
                                    <input type="text" value="" name="n-user" required>
                                    <label>Usuario</label>
                                </div>

                                <div class="input-field" id="input-password">
                                    <input type="password" value="" name="n-password" required>
                                    <label>Contraseña</label>
                                </div>

                                <div class="input-field" id="rol-select">
                                    <select name="n-rol">
                                        <option value="client">Cliente</option>
                                        <option value="admin">Administrador</option>
                                    </select>
                                    <label>Privilegios</label>
                                </div>

                                <input type="hidden" value="ACTIVE" name="power">

                                <div class="right">
                                    <input type="submit" id="btn-guardar" value="Crear Usuario" class="green-text">
                                    <input type="reset" id="btn-guardar" Value="Cancelar" class="red-text">
                                </div>
                                <br>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!--END CARD-->

        </div>
    </div>



</div>

</body>
</html>

