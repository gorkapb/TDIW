<?php
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultEditProfile.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $filters = filter_input_array( INPUT_POST, 
        [
            'name' => FILTER_SANITIZE_STRING,
            'email' => FILTER_SANITIZE_EMAIL,
            'img' => FILTER_SANITIZE_STRING,
            'pw' => FILTER_SANITIZE_STRING,
            'dir' => FILTER_SANITIZE_STRING,
            'town' => FILTER_SANITIZE_STRING,
            'cp' => FILTER_SANITIZE_INT,
        ]
        );
 
        $name = $filters['name'];
        $email = $filters['email'];
        $img = $filters['img'];
        $password = $filters['pw'];
        $dir = $filters['dir'];
        $town = $filters['town'];
        $cp = $filters['cp'];       


        $imgName = null;
        if(!empty($_FILES['image']) && !empty($_FILES['image']['name'])){ //FILTRAMOS IMAGEN PASADA 
            $imgName = basename($_FILES['image']['name']);
            $imgPath = sprintf('%s%s', UPLOADS_FULL_PATH, $imgName);

            move_uploaded_file($_FILES['image']['tmp_name'],$imgPath); //INTRODUCIMOS IMAGEN EN EL DISCO DURO 
        }

        //$result = updateUser($name, $email, $imgName, $password, $dir, $town, $cp); //ACTUALIZAMOS BASE DE DATOS 
        header('Location: /../index.php?accio=edit-profile');
    }    

    include __DIR__.'/../views/edit_profile.php';
    
?>