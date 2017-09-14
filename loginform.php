<?php 
//login form
?>

<head>
    <title>
        <?php echo $title.' login'?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fonts/roboto">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cpanel.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script type="text/javascript" src="assets/js/cpanel_action.js"></script>
</head>

<body>

<div class="login-div" align="center" id="login-div">
    <div class="row valign-wrapper">
        <div class="col s12 m8 offset-m2 l10 offset-l1">
            <div class="card grey lighten-5" id="login-card">
                <div class="card-content black-text">
                    <span class="card-title">Inicia Sesión</span>

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
</div>
</body>