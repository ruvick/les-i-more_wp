<?php 

/*
Template Name: Страница Победитель
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
            <li class="BtnWrap__list-item"><a href="<? bloginfo("url"); ?>" class="BtnWrap__list-item-link">Главная</a></li>
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(14);?>" class="BtnWrap__list-item-link">Выбрать
                дом</a>
            </li>
            <li class="BtnWrap__list-item"><a href="<?php echo get_permalink(10);?>" class="BtnWrap__list-item-link">Ипотека</a>
            </li>
          </ul>
        </div>

        <div class="page-recurring__content">

          <div class="winner-img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/certificate.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/certificate.jpg?_v=1652295772944" alt=""></picture>
          </div>

        </div>

      </div>

      <div class="page-recurring__column">

        <div class="page-recurring__img page-recurring__img-winner">
          <picture><source srcset="<?php echo get_template_directory_uri();?>/img/winner.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/winner.jpg?_v=1652295772944" alt=""></picture>
        </div>

        <div class="winner-descp page-recurring__block-descp">
          <h2 class="page-recurring__block-descp-title title-under">
            Победитель конкурса <br>
            «Регионы - устойчивое развитие»
          </h2>
          <p class="page-recurring__block-descp-subtitle">
            Победитель конкурса "Регионы - устойчивое развитие"
            Наш инвестиционный проект "Жилищный поселок усадебного типа Лес&Море" стал победителем ежегодного
            конкурса "Регионы - устойчивое развитие"
          </p>
          <p class="page-recurring__block-descp-subtitle">
            Победа в конкурсе гарантирует устойчивое финансирование нашего проекта. Наши покупатели могут быть
            уверенны в успешном завершении строительства и в обеспечении поселка всей необходимой инфраструктурой.
          </p>
        </div>

      </div>

    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 