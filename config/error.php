<body>
<div class="login-div" align="center" id="login-div">
    <div class="row valign-wrapper">
        <div class="col s12 m8 l10 offset-m2 l10 offset-l1">
            <div class="card grey lighten-5" id="login-card">
                <div class="card-content black-text">
                    <span class="card-title red-text">🚫 Ups! Algo anda mal.</span>
                    <br>
                    <p>
                        Tal ves no tienes privilegios para realizar esta operación
                        o no has iniciado sesión correctamente. Si "<?php echo $user?>" es
                        tu cuenta y no recuerdas la contraseña ponte en contacto con el
                        administrador (<?php echo $author?>) del sitio para restablecer la contraseña.
                    </p>
                    <br>
                    <a class="btn green waves-effect waves-light" href="index.php">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
