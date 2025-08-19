<?php get_header(); ?>

<!-- All images from https://www.pexels.com -->

<!-- Home page -->

<div>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <!-- Insert Widget 'custom-index-crousel-widget-1' -->
      <?php
      if (is_active_sidebar('custom-index-crousel-widget-1')) :
      ?>
        <div>
          <div id="custom-index-crousel-widget-1" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-index-crousel-widget-1');
            ?>
          </div>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget 'custom-index-crousel-widget-1' End -->

      <div class="text">Peaceful Oasis</div>
    </div>

    <div class="mySlides fade">
      <!-- Insert Widget 'custom-index-crousel-widget-2' -->
      <?php
      if (is_active_sidebar('custom-index-crousel-widget-2')) :
      ?>
        <div id="custom-index-crousel-widget-2" class="chw-widget-area widget-area" role="complementary">
          <?php dynamic_sidebar('custom-index-crousel-widget-2');
          ?>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget 'custom-index-crousel-widget-2' End -->

      <div class="text">Organic Garden</div>
    </div>

    <div class="mySlides fade">
      <!-- Insert Widget 'custom-index-crousel-widget-3' -->
      <?php
      if (is_active_sidebar('custom-index-crousel-widget-3')) :
      ?>
        <div id="custom-index-crousel-widget-3" class="chw-widget-area widget-area" role="complementary">
          <?php dynamic_sidebar('custom-index-crousel-widget-3');
          ?>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget 'custom-index-crousel-widget-3' End-->

      <div class="text">Healthy Blooms</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div id="slider-dot">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <!-- Insert Widget H1 & a paragraph 'custom-index-body-widget-1'-->
  <div id="first-h1">
    <?php
    if (is_active_sidebar('custom-index-body-widget-1')) :
    ?>
      <div id="custom-index-body-widget-1" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar('custom-index-body-widget-1');
        ?>
      </div>
    <?php endif;
    ?>
  </div>
  <!-- Insert Widget H1 & a paragraph 'custom-index-body-widget-1' End -->

  <div id="container-2-section">
    <div id="container-2">
    <figure class="image-animaition"> <!-- Reference from https://codepen.io/littlesnippets/pen/bpMmBO -->
      <!-- Insert Widget images 'custom-index-body-widget-2' -->
      <?php
      if (is_active_sidebar('custom-index-body-widget-2')) :
      ?>
        <div id="custom-index-body-widget-2" class="chw-widget-area widget-area" role="complementary">
          <?php dynamic_sidebar('custom-index-body-widget-2');
          ?>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget images 'custom-index-body-widget-2' End -->

      <div class="title">
        <div>
          <h2>Gift Box</h2>
          <h3>Gifts</h3>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>"></a>
    </figure>
    <figure class="image-animaition">
      <!-- Insert Widget images 'custom-index-body-widget-3' -->
      <?php
      if (is_active_sidebar('custom-index-body-widget-3')) :
      ?>
        <div id="custom-index-body-widget-3" class="chw-widget-area widget-area" role="complementary">
          <?php dynamic_sidebar('custom-index-body-widget-3');
          ?>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget images 'custom-index-body-widget-3 End' -->

      <div class="title">
        <div>
          <h2>Grow Plants</h2>
          <h3>Grow Indoor</h3>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>"></a>
    </figure>
    <figure class="image-animaition">
      <!-- Insert Widget images 'custom-index-body-widget-4' -->

      <?php
      if (is_active_sidebar('custom-index-body-widget-4')) :
      ?>
        <div id="custom-index-body-widget-4" class="chw-widget-area widget-area" role="complementary">
          <?php dynamic_sidebar('custom-index-body-widget-4');
          ?>
        </div>
      <?php endif;
      ?>
      <!-- Insert Widget images 'custom-index-body-widget-4 End' -->

      <div class="title">
        <div>
          <h2>plant Decor</h2>
          <h3>Inspiration</h3>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>"></a>
    </figure>
  </div>
</div>

<div class="container-1">
  <div class="image-side">
    <!-- Insert Widget a image 'custom-index-body-widget-5' -->
    <?php
    if (is_active_sidebar('custom-index-body-widget-5')) :
    ?>
      <div id="custom-index-body-widget-5" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar('custom-index-body-widget-5');
        ?>
      </div>
    <?php endif;
    ?>
    <!-- Insert Widget a image 'custom-index-body-widget-5' End -->

  </div>
  <div id="index-p-1">
    <!-- Insert Widget H2 & paragraph 'custom-index-body-widget-6' -->
    <?php
    if (is_active_sidebar('custom-index-body-widget-6')) :
    ?>
      <div id="custom-index-body-widget-6" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar('custom-index-body-widget-6');
        ?>
      </div>
    <?php endif;
    ?>
    <!-- Insert Widget H2 & paragraph 'custom-index-body-widget-6' End -->
  </div>
</div>

<div class="container-1">
  <div id="index-p-2">
    <!-- Insert Widget h2, and paragraph 'custom-index-body-widget-7' -->
    <?php
    if (is_active_sidebar('custom-index-body-widget-7')) :
    ?>
      <div id="custom-index-body-widget-7" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar('custom-index-body-widget-7');
        ?>
      </div>
    <?php endif;
    ?>
    <!-- Insert Widget h2, and paragraph 'custom-index-body-widget-7' End -->
  </div>
  <div class="image-side">
    <!-- Insert Widget a image 'custom-index-body-widget-8' -->
    <?php
    if (is_active_sidebar('custom-index-body-widget-8')) :
    ?>
      <div id="custom-index-body-widget-8" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar('custom-index-body-widget-8');
        ?>
      </div>
    <?php endif;
    ?>
    <!-- Insert Widget a image 'custom-index-body-widget-8' End -->
  </div>
</div>


<!-- Insert Widget a image 'custom-index-body-widget-9' -->
<div id="third-h2">
  <?php
  if (is_active_sidebar('custom-index-body-widget-9')) :
  ?>
    <div id="custom-index-body-widget-9" class="chw-widget-area widget-area" role="complementary">
      <?php dynamic_sidebar('custom-index-body-widget-9');
      ?>
    </div>
  <?php endif;
  ?>
</div>
<!-- Insert Widget a image 'custom-index-body-widget-9' End -->

<section id="container-3-section"> <!--Reference: https://codepen.io/noahraskin/pen/OJpopPP-->
  <div class="wrap">
    <div class="box">
      <div class="box-top">
        <!-- Insert Widget a image 'custom-index-body-widget-10'-->
        <?php
        if (is_active_sidebar('custom-index-body-widget-10')) :
        ?>
          <div id="custom-index-body-widget-10" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-index-body-widget-10');
            ?>
          </div>
        <?php endif;
        ?>
        <!-- Insert Widget a image 'custom-index-body-widget-10' End-->
      </div>
      <?php
      $post = get_page_by_path('blog-1', OBJECT, 'post'); //Reference from https://developer.wordpress.org/reference/functions/get_page_by_path/
      if ($post) :
      ?>
        <a href="<?php echo get_permalink($post->ID); ?>" class="button"><span>Read</span></a> <!-- Reference from https://stackoverflow.com/questions/34789792/wordpress-echo-current-post-permalink -->
      <?php endif; ?>
    </div>
    <div class="box">
      <div class="box-top">
        <!-- Insert Widget a image 'custom-index-body-widget-11'-->
        <?php
        if (is_active_sidebar('custom-index-body-widget-11')) :
        ?>
          <div id="custom-index-body-widget-11" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-index-body-widget-11');
            ?>
          </div>
        <?php endif;
        ?>
        <!-- Insert Widget a image 'custom-index-body-widget-11' End-->
      </div>
      <?php
      $post = get_page_by_path('blog-2', OBJECT, 'post');
      if ($post) :
      ?>
        <a href="<?php echo get_permalink($post->ID); ?>" class="button"><span>Read</span></a>
      <?php endif; ?>
    </div>
    <div class="box">
      <div class="box-top">
        <!-- Insert Widget a image 'custom-index-body-widget-12'-->
        <?php
        if (is_active_sidebar('custom-index-body-widget-12')) :
        ?>
          <div id="custom-index-body-widget-12" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-index-body-widget-12');
            ?>
          </div>
        <?php endif;
        ?>
        <!-- Insert Widget a image 'custom-index-body-widget-12' End-->
      </div>
      <a href="<?php echo home_url(); ?>" class="button"><span>Read</span></a>
    </div>
    <div class="box">
      <div class="box-top">
        <!-- Insert Widget a image 'custom-index-body-widget-13'-->
        <?php
        if (is_active_sidebar('custom-index-body-widget-13')) :
        ?>
          <div id="custom-index-body-widget-13" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-index-body-widget-13');
            ?>
          </div>
        <?php endif;
        ?>
        <!-- Insert Widget a image 'custom-index-body-widget-13' End-->
      </div>
      <a href="<?php echo home_url(); ?>" class="button"><span>Read</span></a>
    </div>
  </div>
</section>
<a href="">
  <p id="index-bottom-p">Back to Top</p>
</a>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</div>



<?php
get_footer();
