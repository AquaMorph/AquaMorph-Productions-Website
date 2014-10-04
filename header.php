<script>
function toggleVisibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
<div class="header">
	<div id="mobile">
    	<div id="box" onClick="toggleVisibility('menu')"></div>
    	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        
    </div>
	<div id="menu">
	<?php wp_nav_menu( array( 'theme_location' => 'menu-main' ) ); ?>
    </div>
</div>

