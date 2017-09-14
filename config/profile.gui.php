<!--<a href="index.php">Volver</a>-->
<?php
if (isset($usrPower)){
    if ($usrPower == 'ACTIVE'){
        $usrPowerMSG = '- Ususario Activo';
    }else{
        $usrPowerMSG = '- ⚠ Ususario Inactivo - Contacte al Administrador';
    }
}
?>

<div class="container">
    <div class="row" id="card-container">
        <div class="col s12 m8 offset-m2 l10 offset-l1">

            <!--TARJETA AVANZADO-->
            <br>
            <span class="grey-text">
                Mi perfil <?php echo $usrPowerMSG ?>
            </span>
            <div class="row">
                <div class="card-container">
                    <div class="card white lighten-1">

                        <div class="card-content black-text">
                            <?php
                            if (isset($_GET['st']))
                                if ($_GET['st']=='pch'){
                                    echo '<div class="center-align">Se cambió la contraseña</div>';
                                }else{
                                    echo '<div class="center-align">No se cambió la contraseña pero se actualizaron los datos</div>';
                                }
                            ?>

                            <form name="box1" action=".mod-user.php" method="post">

                                <div class="input-field" id="user-name-input">
                                    <input type="text" name="user-name" required value="<?php echo $usrName?>">
                                    <label>Nombre</label>
                                </div>

                                <div class="input-field" id="user-input">
                                    <input type="text" name="n-user" readonly required value="<?php echo $user?>">
                                    <label>Usuario</label>
                                </div>

                                <div class="input-field" id="password-input">
                                    <input type="password" name="old-password" value="">
                                    <label>Contraseña anteriror</label>
                                </div>

                                <div class="input-field" id="new-password-input">
                                    <input type="password" name="n-password" value="">
                                    <label>Nueva contraseña</label>
                                </div>

                                <input type="hidden" readonly name="n-rol" value="<?php echo $usrRol?>">
                                <input type="hidden" readonly name="sps" value="<?php echo base64_encode($psscompare)?>">
                                <input type="hidden" readonly name="usrPower" value="<?php echo $usrPower?>">

                                <div class="right">
                                    <input class="green-text" id="btn-guardar" type="submit" value="Guardar">
                                    <a class="red-text" href="javascript:history.back();">Volver</a>
                                </div>

                            </form>

                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CARD-->

        </div>
    </div>
</div>
