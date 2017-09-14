<div class="container">
    <div class="row" id="card-container">
        <div class="col s12 m8 offset-m2 l10 offset-l1">

            <!--TARJETA AVANZADO-->
            <br>
            <span class="grey-text">Gestionar usuarios</span>
            <div class="row">
                <div class="card-container">
                    <div class="card white lighten-1">

                        <div class="card-content black-text">

                            <?php
                                if(isset($_GET['rst'])){
                                    $status=$_GET['rst'];

                                    if($status=='1'){
                                        //nothing to do!!
                                    }

                                    if($status=='0'){
                                        echo ('
                                            <div class="card" align="center">
                                                <div class="card-content">
                                                    
                                                    <p>🚫 No se puede eliminar el usuario actual, inicie sesión en otra cuenta para poder realizar la operación</p>
                                                    <br>
                                                    <a class="btn green waves-effect waves-light" href="manage-users.php">Descartar</a>
                                                    
                                                </div>
                                            </div>
                                        ');
                                    }
                                }
                            ?>

                            <ul class="collection">

                                <?php
                                $scandir = scandir('users');
                                foreach ($scandir as $scandirFile){
                                    if ($scandirFile == '.' or $scandirFile == '..' or $scandirFile == base64_encode('admin') or $scandirFile == 'admin.zip' or $scandirFile == 'index.php' or $scandirFile == 'index.html'){
                                        //dont show nothing
                                    }else{
                                        //echo '<br>'.base64_decode($scandirFile).' -- '.$scandirFile.'</br>';
                                        $nufile = file_get_contents('users/'.$scandirFile);
                                        $nufileArray = explode(';',$nufile);
                                        $name = base64_decode($nufileArray[2]);

                                        echo ('<li class="collection-item overflow waves-effect user-item"><div> <a href="profile.php?detail='.$scandirFile.'" class="black-text">'.$name.'&nbsp; &nbsp;<br><span class="blue-text">('.base64_decode($scandirFile).')</span></a> <a href="delete.php?usrkey='.$scandirFile.'" class="secondary-content"> <span class="new badge red waves-effect waves-light" data-badge-caption="Eliminar"></span> </a></div></li>');
                                    }

                                }
                                ?>

                            </ul>

                            <a class="red-text right" href="javascript:history.back();">Volver</a>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
            <!--END CARD-->

        </div>
    </div>
</div>