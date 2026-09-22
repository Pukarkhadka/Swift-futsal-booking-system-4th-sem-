<?php 
    function upload_file($tempname, $name) {

        $dest = __DIR__."\uploads\\".$name;
        move_uploaded_file($tempname,$dest);
    }
?>