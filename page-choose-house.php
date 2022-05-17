<?php

/*
Template Name: Страница Подобрать коттедж
Template Post Type: page
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">



  <section id="choose-house" class="choose-house">
    <!-- <a href="#podbor" class="selection-icon-block widget-icon _popup-link"> -->
    <a href="#" id = "podbor_kottedga_btn" class="selection-icon-block widget-icon">
      Подобрать <br>
      коттедж
    </a>

    <div class="svg_wrapper">
      <?php get_template_part('template-parts/svg_home'); ?>
    </div>
  </section>

  <?php get_template_part('template-parts/contacts-section'); ?>

</main>

<?php get_footer();
