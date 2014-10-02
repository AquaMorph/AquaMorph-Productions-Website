<!doctype html>
<html>

<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>

<body>
<?php get_header(); ?>
<div class="wrapper">
	<div class="entry-list">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <div id="section">
    	    <div class="video-container">
            	<div>
					<?php if ( p75HasVideo($post->ID) ) {echo p75GetVideo($post->ID);} else {the_post_thumbnail('post-feature');} ?>
                </div>
            </div>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
        <?php endwhile; ?>
        <div class="navigation"><?php posts_nav_link('&nbsp;','Previous Page','Next Page'); ?></p></div>
        <?php endif; ?>
    	</div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>