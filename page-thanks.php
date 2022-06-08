<?php 

/*
Template Name: Страница Благодарности
Template Post Type: page 
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section class="page-recurring">
  <div class="page-recurring__container _container"> 

    <div class="page-recurring__wrapper">

      <div class="page-recurring__column">

        <!-- <div class="BtnWrap page-recurring-bg">
          <ul class="BtnWrap__list">
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(8);?>" class="BtnWrap__list-item-link <?php if (get_the_ID() == 8) echo "active";?>">Условия покупки</a></li> 
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(10);?>" class="BtnWrap__list-item-link <?php if (get_the_ID() == 10) echo "active";?>">Ипотека</a></li>
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(19);?>" class="BtnWrap__list-item-link BtnWrap__list-item-link_none <?php if (get_the_ID() == 19) echo "active";?>">Рассрочка</a></li>
          </ul>
        </div> -->

        <div class="page-recurring__content purchase-content">

          <h1 class="page-recurring__content-title title-under">Благодарим за обращение!</h1>
          <p class="page-recurring__content-subtitle"><?php the_content(); ?></p>

        </div>

      </div>

      <div class="page-recurring__column">

        <div class="page-recurring__img">
          <picture><source srcset="<?php echo get_template_directory_uri();?>/img/pokupka.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/pokupka.jpg?_v=1652295772944" alt=""></picture>
        </div>

      </div>

    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 