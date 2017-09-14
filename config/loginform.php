<?php 
//login form
?>

<div class="login-div" align="center" id="login-div">
    <div class="row valign-wrapper">
        <div class="col s12 m8 offset-m2 l10 offset-l1">
            <div class="card grey lighten-5" id="login-card">
                <div class="card-content black-text">
                    <span class="card-title">Inicia Sesión</span>
                    <span> Administrar Cuentas </span>

                        <?php
                        if(isset($logmsg)){

                            echo '<div class="center-align">'.$logmsg.'</div>';

                        }
                        ?>
                    
                    <br>
                    <form name="loginform" method="post" action="index.php" class="form1">

                        <div class="input-field">
                            <label>Usuario</label>
                            <input type="text" value=""  name="user" required>
                        </div>

                        <div class="input-field">
                            <label>Contraseña</label>
                            <input type="password" name="password" required>
                        </div>

                        <input type="submit" value="Entrar" class="btn green waves-effect waves-light">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="../index.php">Volver al contenido</a>
</div>
