<?php
include_once 'inc/functions.php';
$id = 0;
if (isset($_GET['id']) && !empty($_GET['id']))
	$id = $_GET['id'];
$posts = get_posts($_GET['id']);

include_once 'inc/header.php';
include_once 'inc/posts.php';
include_once 'inc/footer.php';
