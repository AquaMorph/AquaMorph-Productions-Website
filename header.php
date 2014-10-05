<script>
function toggleVisibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
var mql = window.matchMedia("(min-width:42em)");
mql.addListener(function(e){
	if(e.matches) {
		document.getElementById('menu').style.display = 'block';
	}
});
var mql = window.matchMedia("(max-width:42em)");
mql.addListener(function(e){
	if(e.matches) {
		document.getElementById('menu').style.display = 'none';
	}
});
</script>
<div class="header">
	<div id="mobile">
    	<div id="box" onClick="toggleVisibility('menu')"><div id="line"></div><div id="line"></div><div id="line"></div></div>
    	<a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
        
    </div>
	<div id="menu">
	<?php wp_nav_menu( array( 'theme_location' => 'menu-main' ) ); ?>
    </div>
</div>

