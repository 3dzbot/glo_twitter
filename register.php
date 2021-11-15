<?php
include_once 'inc/functions.php';

if(logged_in()) redirect(get_url());

$title = 'Регистрация';
$error = get_error_message();

include_once 'inc/header.php';
include_once 'inc/register_form.php';
include_once 'inc/footer.php';
