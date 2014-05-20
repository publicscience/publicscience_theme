<?php theme_include('header'); ?>

		<section class="content">
			<article class="single">
                <header>
                    <h1><?php echo article_title(); ?></h1>
                    <div class="meta">
                        <?php echo article_author(); ?> | 
                        <?php echo article_date(); ?>
                    </div>
                </header>
                <div class="body">
                    <?php echo article_markdown(); ?>
                </div>
			</article>
		</section>
	
		<section class="comments">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = '<?php echo site_meta('disqus', 'publicscience'); ?>'; // required: replace example with your forum shortname

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</section>

<?php theme_include('footer'); ?>