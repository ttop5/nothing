<?php get_header(); ?>
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<div>
		<!-- 博文 -->
		<div>
			<!-- 文章标题 -->
			<h2>[ <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> ]</h2>
			<!-- 文章内容 -->
			<?php the_content(); ?>
            <br>
			<p> <a href="<?php echo get_option('home'); ?>">&lt;&lt; 返回首页</a></p>
		</div>
	</div>
    <?php else : ?>
    <div>
        没有文章！
    </div>
    <?php endif; ?>
    <hr>
<?php get_footer(); ?>
