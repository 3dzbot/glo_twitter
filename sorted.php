<?php
include_once 'inc/functions.php';
$posts = get_posts(0, true);
$title = 'От старых постов';
$error = get_error_message();

include_once 'inc/header.php';
include_once 'inc/posts.php';
include_once 'inc/footer.php';
