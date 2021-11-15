<?php
include_once 'inc/functions.php';
$posts = get_posts();
$title = 'Главная страница';
$error = get_error_message();

include_once 'inc/header.php';

include_once 'inc/tweet_form.php';

include_once 'inc/posts.php';

include_once 'inc/footer.php';
