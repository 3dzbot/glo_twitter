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
								<time class="tweet-author__add tweet__date"><?= date('d.m.y в H:i ', strtotime($post['date']))?></time>
							</h3>
							<?php if(logged_in() && $post['user_id'] == $_SESSION['user']['id']) :  ?>
							<a href="<?= get_url('inc/delete_post.php?id=' . $post['id']) ?>" class="tweet__delete-button chest-icon"></a>
							<?php endif; ?>
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

			<?php
		}
			?>
	</ul>
</section>
<!-- /.wrapper -->
<?php else : echo "Постов нету";
endif;