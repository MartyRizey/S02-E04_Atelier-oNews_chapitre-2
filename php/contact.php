<?php

if(!empty($_POST)) {

    echo 'J\'ai bien reçu ton formulaire en POST';
    echo '<pre>';
    print_r($_POST);
    echo'</pre>';
    echo '<hr>';

    die();

} else if(!empty($_GET)){

    echo 'J\'ai bien reçu ton formulaire en GET';
    echo '<p style="color: red;">ATTENTION, les données sont visibles dans l\'URL...</p>';

    echo '<pre>';
    print_r($_GET);
    echo'</pre>';
    echo '<hr>';

    die();
}

$isContact = true;

require 'inc/header.php';
require 'inc/contact_tpl.php';
require 'inc/footer.php';



