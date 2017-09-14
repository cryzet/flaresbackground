<?php
include 'head.php';
$webinfofile=fopen('webinfo.ini','r+b');
$web_info=explode('•←¶§→•',fread($webinfofile,'1000'));
$title=$web_info[0];
$year=$web_info[1];
$copyright=$web_info[2];
$author=$web_info[3];
$persist='savesettings.php';
?>

<body>
<div class="login-div" align="center" id="login-div">
    <div class="row valign-wrapper">
        <div class="col s12 m8 l10 offset-m2 l10 offset-l1">
            <div class="card grey lighten-5" id="login-card">
                <div class="card-content black-text">
                    <span class="card-title red-text">⚠ Psssss! ¿Qué andas buscando?</span>
                    <br>
                    <p>
                        Creo que lo que buscas no está por aquí, Intenta buscar en otro lugar. Si el problema persiste ponte en contacto con el
                        administrador (<?php echo $author?>) del sitio.
                    </p>
                    <br>
                    <a class="btn green waves-effect waves-light" href="index.php">volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
