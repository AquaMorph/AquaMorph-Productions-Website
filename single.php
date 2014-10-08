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
        <div class="section">
    	    <div class="video-container">
            	<div>
					<?php if ( p75HasVideo($post->ID) ) {echo p75GetVideo($post->ID);} else {echo"<a href='";the_permalink(); echo"'>"; the_post_thumbnail('post-feature'); echo "</a>";} ?>
                </div>
            </div>
            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        </div>
        <?php endwhile; ?>
        <div class="content" ><?php the_content(); ?></div>
        <?php endif; ?>
    	</div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>