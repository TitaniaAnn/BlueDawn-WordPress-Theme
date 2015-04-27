<?php
/*
 * Template Name: Links
 * Description: A Page Template for a page that displays all child links.
 */

// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

// Get the page as an Object
$portfolio =  get_page_by_title(get_the_title());

// Filter through all pages and find Portfolio's children 
$portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

	<ul>
      <?php 

      // echo what we get back from WP to the browser
	foreach ($portfolio_children as $p)
	{
		echo '<li class="links-page"><h3><a href="' . $p->guid . '" target="_blank">' . $p->post_name . '</a></h3><p>' . $p->post_content . '</p></li>';
	}

       ?>
	</ul>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>