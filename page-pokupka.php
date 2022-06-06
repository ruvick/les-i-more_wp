<?php 

/*
Template Name: Страница Условия покупки
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
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(19);?>" class="BtnWrap__list-item-link BtnWrap__list-item-link_none <?php if (get_the_ID() == 19) echo "active";?>">Рассрочка</a></li>
          </ul>
        </div>

        <div class="page-recurring__content purchase-content">

          <h1 class="page-recurring__content-title title-under">Договор подряда</h1>
          <p class="page-recurring__content-subtitle">
            Соглашение, в соответствии с которым одна сторона (подрядчик) обязуется выполнить по заданию другой стороны (заказчика) определенную работу и сдать ее результат заказчику, а последний обязуется принять результат работы и оплатить его.
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

      <h3 class="page-recurring__content-title title-under">Процедура покупки</h3>

      <ul class="page-recurring__row-list">
        <li class="page-recurring__row-list-item"><span>1</span>
          Ознакомьтесь с ассортиментом
          домов на сайте проекта и
          свяжитесь с нами
        </li>
        <!-- <li class="page-recurring__row-list-item"><span>4</span>
          Откройте счет эскроу.
          Откройте аккредитивный
          счет с указанием реквизитов
        </li> -->
        <li class="page-recurring__row-list-item"><span>3</span>
          Осуществите оплату дома
          в соответствии с выбранной формой
        </li>
        <li class="page-recurring__row-list-item"><span>2</span>
        Приезжайте в офис
          ЖК «Пятницкий Лес»
          и забронируйте дом  
        
        </li>
        <!-- <li class="page-recurring__row-list-item"><span>3</span>
          Подпишите предварительный договор купли-продажи земельного участка
        </li> -->
        <li class="page-recurring__row-list-item"><span>4</span>
          После заключения сделки просмотр дома и получение ключей
        </li>
      </ul>

    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 