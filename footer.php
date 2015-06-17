		<footer>
            <ul class="social-media list__horizontal__center">
                <li><a href="https://github.com/<?php echo site_meta('github', 'publicscience'); ?>"><span class="icon-github"></span></a></li>
                <li><a href="https://twitter.com/<?php echo site_meta('twitter', 'pub_sci'); ?>"><span class="icon-twitter"></span></a></li>
                <?php
                    $links = explode('\n', site_meta('links', ''));
                    foreach ($links as $link) {
                        echo '<li>'.$link.'</li>';
                    }
                ?>
            </ul>
		</footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script src="<?php echo theme_url('js/highlight.pack.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('pre').each(function(i, e) {hljs.highlightBlock(e)});
            MathJax.Hub.Config({
                tex2jax: {
                    inlineMath: [["$","$"]],
                    displayMath: [['$$','$$']],
                    processEscapes: true
                }
            });
            MathJax.Hub.Startup.onload();
        });
    </script>
	</body>
</html>