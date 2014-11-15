<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	<div class="clear"></div>
</div>

<div id="footer" role="contentinfo">
	<div id="colophon">
		<div class="left">&copy <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> | Powered by <a href="http://wordpress.org/" target="_blank" rel="generator">WordPress</a> | Designed by <a href="http://c7sky.com/" target="_blank">Cople</a><?php if ($zine_footer) { ?> | <?php echo stripslashes($zine_footer); ?><?php } ?></div>
		<div class="right"><a id="gotop" href="#top">&uarr; 返回顶部</a></div>
	</div>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/ready.js"></script>
<!--[if lte IE <?php echo $zine_ie7upgrade == "true" ? "7" : "6"; ?>]><script src="<?php bloginfo('template_url'); ?>/js/ie6upgrade.js"></script><![endif]-->
<?php if(is_single()) { echo'<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js?uid=897472" charset="utf-8"></script>'; } ?>
<?php wp_footer(); ?>
<div style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fbbecc6c4d17f596ef9cfc6622eddc21d' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>