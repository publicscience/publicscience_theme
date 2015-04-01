<?php theme_include('header'); ?>

		<section class="content posts">
			<?php if(has_posts()) : while(posts()) : ?>
                <?php
                    if (article_category() === "drafts")
                        continue;
                ?>
				<article>
                    <header>
                        <h1>
                            <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                        </h1>
                        <ul class="meta">
                            <li><?php echo article_date(); ?></li>
                            <li><?php echo article_author(); ?></li>
                            <li>
                                <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>
                            </li>
                        </ul>
                    </header>
                    <div class="body">
                        <?php echo article_markdown(); ?>
                    </div>
                    <div class="divider">~</div>
				</article>
			<?php endwhile; endif; ?>
		</section>

		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
                    <!-- these are swapped because intuitively they work the other way for me -->
                    <span class="prev"><?php echo posts_next("☜(ﾟヮﾟ☜)"); ?></span>
			        <span class="next"><?php echo posts_prev("(☞ﾟヮﾟ)☞"); ?></span>
			    </nav>
			<?php endif; ?>
		</section>

<?php theme_include('footer'); ?>