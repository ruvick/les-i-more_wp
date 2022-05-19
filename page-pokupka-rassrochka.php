<?php 

/*
Template Name: Шаблон страницы Покупка-Рассрочка
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section class="page-recurring">
  <div class="page-recurring__container _container"> 

    <div class="page-recurring__wrapper">

      <div class="page-recurring__column">

        <div class="BtnWrap page-recurring-bg">
          <ul class="BtnWrap__list">
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(8);?>" class="BtnWrap__list-item-link <?php if (get_the_ID() == 8) echo "active";?>">Условия покупки</a></li> 
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(10);?>" class="BtnWrap__list-item-link <?php if (get_the_ID() == 10) echo "active";?>">Ипотека</a></li>
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(19);?>" class="BtnWrap__list-item-link <?php if (get_the_ID() == 19) echo "active";?>">Рассрочка</a></li>
          </ul>
        </div>

        <div class="page-recurring__content purchase-content">

          <h1 class="page-recurring__content-title title-under"><?php the_title();?></h1> 
          <p class="page-recurring__content-subtitle">
          <?php the_content();?>
          </p>

        </div>

      </div>

      <div class="page-recurring__column">

        <div class="page-recurring__img">
          <img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pokupka_rassrochka_img"), 'full')[0];?>" alt=""> 	
        </div>

      </div>

    </div>

    <div class="page-recurring__row purchase__row">

      <h3 class="page-recurring__content-title title-under"><?echo carbon_get_post_meta(get_the_ID(),"pokupka_rassrochka_title"); ?></h3>

      <ul class="page-recurring__row-list">
      <? 
		    $pokupkaRass = carbon_get_post_meta(get_the_ID(),"pokupka_rassrochka_complex"); 
	        if ($pokupkaRass) {
		    $pokupkaRassIndex = 0;
		      foreach ($pokupkaRass as $item) {
			?>
        <li class="page-recurring__row-list-item"><span><? echo $item['pokupka_rassrochka_complex_number']; ?></span>
        <? echo $item['pokupka_rassrochka_complex_text']; ?>
        </li>
			<?
			  $pokupkaRassIndex++; 
		      }
	      }
	    ?>
      </ul>

    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 