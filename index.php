<?php get_header(); ?>
	<div>
		<!-- 博文 -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div>
			<!--  文章标题 -->
			<h2>[ <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a> ]</h2>
			<!-- 文章信息 -->
			<p><?php the_time('Y-m-d') ?><?php edit_post_link('编辑', ' &bull; ', ''); ?></p>
			<!-- 文章内容 -->
			<?php the_excerpt(); ?>
			<!-- 全文阅读按钮 -->
			<p><a href="<?php the_permalink(); ?>">阅读全文>>></a></p>
		</div>
		<div>&nbsp;</div>
		<?php endwhile; ?>

		<!--  -->
		<p><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span><?php next_posts_link(' 查看旧文章 &gt;&gt;', 0); ?></span></p>
		<?php else : ?>
		<h3><a href="#" rel="bookmark">未找到</a></h3>
		<p>没有找到任何文章！</p>
		<?php endif; ?>
	</div>
    <hr>
<?php get_footer(); ?>
