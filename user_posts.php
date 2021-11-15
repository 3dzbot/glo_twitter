<?php
include_once 'inc/functions.php';
$id = 0;
$title = 'Твиты пользователей';
$error = get_error_message();
if (isset($_SESSION['user']['id'])) {
	$id = $_SESSION['user']['id'];
} elseif (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = 0;
}

$posts = get_posts($id);

if($id && !empty($posts)) {
	$title = 'Посты пользователя @' . $posts[0]['login'];
}

include_once 'inc/header.php';
if(logged_in()) include_once 'inc/tweet_form.php';
include_once 'inc/posts.php';
include_once 'inc/footer.php';
