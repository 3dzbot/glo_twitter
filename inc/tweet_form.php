<section class="wrapper">
	<form class="tweet-form" action="<?= get_url('inc/add_post.php')?>" method="post">
		<div class="tweet-form__wrapper">
			<img class="avatar" src="<?=get_url( $_SESSION['user']['avatar'] )?>" alt="Аватар">
			<textarea class="tweet-form__text" rows="4" name="text" placeholder="Что происходит?" required></textarea>
		</div>
		<div class="tweet-form__btns">
			<button class="tweet-img__btn" type="button"></button>
			<span id="image-span">path/to/image</span>
			<input type="hidden" id="image-path" name="image">
			<button class="tweet-form__btn" type="submit">Твитнуть</button>
		</div>
	</form>
</section>
<!-- /.wrapper -->