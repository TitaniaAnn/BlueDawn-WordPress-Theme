<?php
/*
 * Template Name: Contact Us
 * Description: A Page Template for a contact page.
 */


//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";

}

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>



<div id="respond">

  <?php echo $response; ?>

  <form action="<?php the_permalink(); ?>" method="post">

    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>

    <p><label for="name">Phone: <span>*</span> <br><input type="text" name="message_phone" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>

    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>

    <p><label for="message_email">Subject: <span>*</span> <br><input type="text" name="message_subject" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>

    <p><label for="message_text">Questions or Comments: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>

    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>

    <input type="hidden" name="submitted" value="1">

    <p><input type="submit"></p>

  </form>

</div>



      <?php endwhile; // end of the loop. ?>



    </main><!-- #main -->

  </div><!-- #primary -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>