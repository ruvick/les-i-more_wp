<?php 

/*
Template Name: Страница Подобрать коттедж
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			

<section id="choose-house" class="choose-house">
  <a href="#" class="selection-icon-block widget-icon">
    Подобрать <br>
    коттедж
  </a>
  <div class="choose-house__img">
    <picture><source srcset="<?php echo get_template_directory_uri();?>/img/choose-house-bg.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/choose-house-bg.jpg?_v=1652295772944" alt=""></picture>
  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 