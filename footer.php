		<footer>
            <ul class="social-media list__horizontal__center">
                <li><a href="https://github.com/<?php echo site_meta('github', 'publicscience'); ?>"><span class="icon-github"></span></a></li>
                <li><a href="https://twitter.com/<?php echo site_meta('twitter', 'pub_sci'); ?>"><span class="icon-twitter"></span></a></li>
            </ul>
		</footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo theme_url('js/highlight.pack.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('pre').each(function(i, e) {hljs.highlightBlock(e)});
        });
    </script>
	</body>
</html>