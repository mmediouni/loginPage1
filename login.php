<?php
session_start();
if (empty($_POST)) {
   
    include 'login.phtml';
}

else {
    if($_POST['login'] == 'user1' && $_POST['password'] == '1234'){
        $_SESSION['utilisateur'] = 
            [
                'nom'    => 'Mediouni',
                'id'     => 5,
                'prenom' => 'Mohamed',
                'photo'  => 'https://media-exp1.licdn.com/dms/image/C4E03AQG87I8hnbkDiA/profile-displayphoto-shrink_800_800/0/1613996003334?e=1623283200&v=beta&t=P-fMkDnzRhhIHdv9TjMD-KUgSv-ggIC62u4V-gXz7Uw',
            ];
            


        header('location:index.php');
    }
    if($_POST['login'] == 'user2' && $_POST['password'] == '1234'){
        $_SESSION['utilisateur'] = 
            [
                'nom'    => 'Barka',
                'id'     => 6,
                'prenom' => 'Marouen',
                'photo'  => 'https://media-exp1.licdn.com/dms/image/C5603AQGsbGaD_NAR9w/profile-displayphoto-shrink_800_800/0/1539718921040?e=1623283200&v=beta&t=yxHBOzqw5PeGW4HzKrAkRwmyucGA-5ApIK-9BvbLmCc',
            ];
            


        header('location:index.php');
    }
    if($_POST['login'] == 'jozef' && $_POST['password'] == '56789'){
        $_SESSION['utilisateur'] = 
            [
                'nom'    => 'Mediouni',
                'id'     => 3,
                'prenom' => 'Youssef',
                'photo'  => 'https://media-exp1.licdn.com/dms/image/C5603AQEsneblu_VNOQ/profile-displayphoto-shrink_800_800/0/1613418257360?e=1623283200&v=beta&t=x0XbcLl0VEkuPfxl_vqIiextMZUVDJc_Z1J0YvBfzl0',
            ];
            


        header('location:index.php');
    }
    if($_POST['login'] == 'user3' && $_POST['password'] == '1234'){
        $_SESSION['utilisateur'] = 
            [
                'nom'    => 'Mediouni',
                'id'     => 125,
                'prenom' => 'Hatem',
                'photo'  => 'https://media-exp1.licdn.com/dms/image/C4D03AQGmhB_RWf2yIw/profile-displayphoto-shrink_800_800/0/1572818228910?e=1623283200&v=beta&t=j87TY5cfQDBFbcXiw9lxu9Pojz2WzWSZR-quwtqZF9s',
            ];
            


        header('location:index.php');
    }
    else {
        $erreur = 'login ou pass incorrect';
        include 'login.phtml';
    }
}

// password_hash