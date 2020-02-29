<?php
class UploadFile{
            
        public static function uploadFiles($imagen){

          

            $nombre = $imagen["name"];
            $ext = pathinfo($nombre,PATHINFO_EXTENSION);
            $archivoOrigen = $imagen["tmp_name"];
            $archivoDestino = '../../img/libros-portadas/';
            $avatar = uniqid();
            $archivoDestino = $archivoDestino.$avatar;
    
            $archivoDestino = $archivoDestino.".".$ext;
            
            $upload = move_uploaded_file($archivoOrigen,$archivoDestino);
            $avatar = $avatar.".".$ext;
            
            return ($upload ? $avatar : null);
            
        }

        public static function deleteFile($imagen){

            $path = '../../img/libros-portadas/'. $imagen;

            if (file_exists($path)) {

                if (unlink($path)) {
                    return true;
                }else{
                    return false;
                }

            }
        }
    
}

?>