<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * No-Posts Loop Content Template-Part File
 *
 * @file           loop-no-posts.php
 * @package        Responsive 
 * @author         Emil Uzelac , amended by Alewis
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/loop-no-posts.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

/**
 * If there are no posts in the loop,
 * display default content
 */ 
$title = ( is_search() ? sprintf(__('Your search for %s did not match any entries.', 'responsive' ), 

get_search_query() ) : __( '404 &#8212; Fancy meeting you here!', 'responsive' ) );
?>

<h1 class="title-404"><?php echo $title; ?></h1>
  		
<p><?php _e( 'Sorry you didn&#39;t find what you were looking for.<br />', 

'responsive' ); ?></p>
			
<h6><?php 
printf( __( 'You can return  %s  or search for the page you were looking for.<br /><br />We&#39;ve also listed the latest posts and archives here.<br />You might find what you want by browsing these.', 'responsive' ),
	sprintf( '<a href="%1$s" title="%2$s">%3$s</a>',
		esc_url( get_home_url() ),
		esc_attr__( 'Home', 'responsive' ),
		esc_attr__( '&larr; Home', 'responsive' )
	) 
); 
?></h6>
