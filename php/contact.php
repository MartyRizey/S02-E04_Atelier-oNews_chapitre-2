<?php

echo '<pre>';
var_dump($_POST);
echo '<hr>';
print_r($_GET);
echo'</pre>';

$isContact = true;

require 'inc/header.php';

require 'inc/contact_tpl.php';

require 'inc/footer.php';



