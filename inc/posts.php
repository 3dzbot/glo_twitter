<?php
if($posts) :
//	echo "<pre>";
//	var_dump($posts);
//	echo "</pre>";
//}
?>
<section class="wrapper">
	<ul class="tweet-list">
		<?php
		foreach ($posts as $post) {
		?>
		<li>
			<article class="tweet">
				<div class="row">
					<img class="avatar" src="<?= $post['avatar'] ?>" alt="Аватар пользователя Мария">
					<div class="tweet__wrapper">
						<header class="tweet__header">
							<h3 class="tweet-author"><?= $post['name'] ?>
								<a href="<?= get_url('user_posts.php?id=' . $post['user_id']) ?>" class="tweet-author__add tweet-author__nickname"><?= '@' . $post['login'] ?></a>
								<time class="tweet-author__add tweet__date"><?= date('d.m.y в H:m ', strtotime($post['date']))?></time>
							</h3>
							<button class="tweet__delete-button chest-icon"></button>
						</header>
						<div class="tweet-post">
							<p class="tweet-post__text"><?= $post['text'] ?></p>
						<?php if( $url = $post['image']) : ?>
							<figure class="tweet-post__image">
								<img src="<?= $url ?>" alt="<?= $post['text'] ?>">
							</figure>
						<?php endif; ?>
						</div>
					</div>
				</div>
				<footer>
					<button class="tweet__like">53</button>
<!-- tweet__like_active-->
				</footer>
			</article>
		</li>

<!--		<li>-->
<!--			<article class="tweet">-->
<!--				<div class="row">-->
<!--					<img class="avatar" src="images/brock.jpg" alt="Аватар пользователя Брок">-->
<!--					<div class="tweet__wrapper">-->
<!--						<header class="tweet__header">-->
<!--							<h3 class="tweet-author">Brock Merge-->
<!--								<a href="#" class="tweet-author__add tweet-author__nickname">@brock</a>-->
<!--								<time class="tweet-author__add tweet__date">07 января</time>-->
<!--							</h3>-->
<!--							<button class="tweet__delete-button chest-icon"></button>-->
<!--						</header>-->
<!--						<div class="tweet-post">-->
<!--							<p class="tweet-post__text">Сообщение Брока> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis dolorem eaque et, explicabo facere facilis harum laboriosam magni nobis numquam provident quam rem rerum, vero? Nostrum porro ratione sed.</p>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<footer>-->
<!--					<button class="tweet__like tweet__like_active">22</button>-->
<!--				</footer>-->
<!--			</article>-->
<!--		</li>-->
			<?php
		}
			?>
	</ul>
</section>
<!-- /.wrapper -->
<?php
endif;