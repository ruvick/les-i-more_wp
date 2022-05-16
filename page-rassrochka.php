<?php 

/*
Template Name: Страница Рассрочка
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
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(8);?>" class="BtnWrap__list-item-link">Условия покупки</a></li> 
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(10);?>" class="BtnWrap__list-item-link">Ипотека</a></li>
            <li class="BtnWrap__list-item"><a href="#" class="BtnWrap__list-item-link">Рассрочка</a></li>
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
          <picture><source srcset="<?php echo get_template_directory_uri();?>/img/pokupka.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/pokupka.jpg?_v=1652295772944" alt=""></picture>
        </div>

      </div>

    </div>

    <div class="page-recurring__row purchase__row">

      <!-- <h3 class="page-recurring__content-title title-under">Процедура покупки</h3>

      <ul class="page-recurring__row-list">
        <li class="page-recurring__row-list-item"><span>1</span>
          Ознакомьтесь с ассортиментом
          домов на сайте проекта и
          свяжитесь с нами
        </li>
        <li class="page-recurring__row-list-item"><span>4</span>
          Откройте счет эскроу.
          Откройте аккредитивный
          счет с указанием реквизитов
        </li>
        <li class="page-recurring__row-list-item"><span>2</span>
          Приезжайте в офис
          «Пятницкий лес»
          и забронируйте квартиру
        </li>
        <li class="page-recurring__row-list-item"><span>5</span>
          Осуществите оплату дома
          в соответствии с выбранным
          графиком платежей
        </li>
        <li class="page-recurring__row-list-item"><span>3</span>
          Подпишите договор участия в
          долевом строительстве
          (согласно №214-ФЗ)
        </li>
        <li class="page-recurring__row-list-item"><span>6</span>
          После ввода в эксплуатацию
          просмотр дома и
          получение ключей
        </li>
      </ul> -->

    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 