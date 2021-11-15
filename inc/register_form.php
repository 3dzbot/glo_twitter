<section class="wrapper">
	<h2 class="tweet-form__title"><?= $title; ?></h2>
	<?php if($error) : ?>
	<div class="tweet-form__error"><?= $error ?></div>
	<?php endif;  ?>
	<form class="tweet-form" action="<?= get_url('inc/sign_up.php') ?>" method="post">
		<div class="tweet-form__wrapper_inputs">
			<input type="text" class="tweet-form__input" name="login" placeholder="Логин" required>
			<input type="password" class="tweet-form__input" name="pass" placeholder="Пароль" required>
			<input type="password" class="tweet-form__input" name="pass2" placeholder="Пароль повторно" required>
		</div>
		<div class="tweet-form__btns_center">
			<button class="tweet-form__btn_center" type="submit">Зарегистрироваться</button>
		</div>
	</form>
</section>