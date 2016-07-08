<?php

function change_avatar(){
    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
    foreach ($blacklist as $item){
        if(preg_match("/$item\$/i", $_FILES['new_avatar']['name'])) exit;
    }

    if(($_FILES['new_avatar']['name'])){

        $avatar_name = $_FILES['new_avatar']['name'];
        $dir_to_upload_avatar   = "images/".$avatar_name;
        move_uploaded_file($_FILES['new_avatar']['tmp_name'],$dir_to_upload_avatar);

    }

}

