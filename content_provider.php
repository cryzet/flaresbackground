<?php
/**
 * Escanear directorio
 */

//el echo a continuacion es temporal.
//echo('<input type="button" id="showupload" value="Cargar Archivo" onclick="showuploaddiv();"><br>');

$i=0;
if (isset($_GET['content'])){

    $content = $_GET['content'];
    if ($content==""){
        unset($content);
    }
}

/*
 * Si la variable "content no está establecida" se mostrará
 * el índice de la página. Sino se muestra la página según
 * el valor de la variable "content".
 */
if (!isset($content)){
    //echo'content no esta establecida - Se Muestra el indice Principal<br>';

    $scanned_dir = scandir('media');
    $subtitle = 'Inicio';
    foreach ($scanned_dir as $lista_dir){
        if ($lista_dir=='.' or $lista_dir=='..' ){
            /*
             * no hace nada, no se muestra "." y ".." en el documento.
             * echo $lista_dir.'<br>';
             */
        }else{
            if(file_exists('content/'.$lista_dir.'.png"')){
                $thumbnail[$i] = '<img class="elementicon" src="content/'.$lista_dir.'.png">';
                $lista[$i] = '<a href="index.php?content='.$lista_dir.'">'.$lista_dir.'</a>';
                $i=$i+1;
                $class='link_list';
            }else{
                $thumbnail[$i] = '<img class="elementicon" src="assets/pic/default.png">';
                $lista[$i] = '<a href="index.php?content='.$lista_dir.'">'.$lista_dir.'</a>';
                $i=$i+1;
                $class='link_list';
            }

        }

    }

}else{
    $content = $_GET['content'];
    $subtitle = $content;

    $scanned_sub_dir = scandir('media/'.$content);
    sort($scanned_sub_dir);

    foreach ($scanned_sub_dir as $lista_sub_dir){
        if ($lista_sub_dir=='.' or $lista_sub_dir=='..' ){
            /*
             * no hace nada, no se muestra "." y ".." en el documento.
             * echo $lista_sub_dir.'<br>';
             */
        }else{
            if ($content == 'Fotos'){
                $thumbnail[$i] = '<a href="media/'.$content.'/'.$lista_sub_dir.'"><img class="thumbnail" src="media/'.$content.'/'.$lista_sub_dir.'"></a>';
                $class='photo_list';
            }else{
                if(file_exists('content/'.$content.'.png"')){
                    $thumbnail[$i] = '<img class="elementicon" src="content/'.$content.'.png">';
                    $class='link_list';
                }else{
                    $thumbnail[$i] = '<img class="elementicon" src="assets/pic/default.png">';
                    $class='link_list';
                }

            }

            $lista[$i] = '<a href="media/'.$content.'/'.$lista_sub_dir.'">'.$lista_sub_dir.'</a>';
            $i=$i+1;
        }

    }
}
/**
 * echo $subtitle;
 * print_r($lista);
 * echo '<hr>';
 * print_r($thumbnail);
 */

/*
 * La lista de elementos se encuentra almacenada en la variable "$lista"
 * La miniatura para cada elemento de la lista se encuentra almacenada en "$thumbnail"
 * El titulo de la pagina se encuentra almacenada en la variable "$subtitle"
 */
