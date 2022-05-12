<?php 

/*
Template Name: Страница Инфраструктура
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="WrapperPage" class="WrapperPage d-flex">
  <div class="WrapperPage__main">
    <div class="map" id="map"></div>
  </div>
  <div class="WrapperPage__sidebar">
    <?
        function get_table_icon($cat) {
          if ($cat === "Образование") return "infra_school";
          if ($cat === "Торговые центры") return "infra_shop";
          if ($cat === "Фитнес") return "infra_sport";
        }

      global $wpdb;
      $cats = $wpdb->get_results("SELECT `cat`, count(*) as `count` FROM `wp_infra` GROUP BY `cat`");
      $objects = $wpdb->get_results("SELECT * FROM `wp_infra`");

    ?>

    <div class="spollers-block WrapperPage__sidebar-spoller" data-spollers data-one-spoller>
      <div class="spollers-block__item">
        <div class="WrapperPage__sidebar-spoller-title spollers-block__title" data-spoller>Крупные объекты</div>
        <div class="WrapperPage__sidebar-spoller-body spollers-block__body">
          <ul class="WrapperPage__sidebar-spoller-body-list">
            
            <?
              foreach ($cats as $onecat) {
            ?>
                <li class="WrapperPage__sidebar-spoller-body-list-item">
                  <a href="#"><? echo $onecat->cat; ?><span><? echo $onecat->count; ?></span></a>
                </li>
            <?
              }
            ?>

          </ul>
          <div class="WrapperPage__sidebar-spoller-body-btn">
            <a href="#" class="WrapperPage__sidebar-spoller-body-btn-link btn">Показать</a>
            <a href="#" class="WrapperPage__sidebar-spoller-body-btn-link btn btn-transparent">Сбросить</a>
          </div>
        </div>
      </div>
    </div>

    <div class="WrapperPage__sidebar-infoBlock">

      <?
        foreach ($objects as $obj) {
      ?>
        <div class="WrapperPage__sidebar-infoBlock-item d-flex">
          <div class="WrapperPage__sidebar-infoBlock-item-icon WrapperPage__sidebar-infoBlock-item-icon_01 <?echo get_table_icon($obj->cat);?>"></div>
          <div class="WrapperPage__sidebar-infoBlock-item-descp">
            <div class="WrapperPage__sidebar-infoBlock-item-descp-mame"><? echo $obj->name; ?></div>
            <div class="WrapperPage__sidebar-infoBlock-item-descp-charect d-flex">
              <div class="WrapperPage__sidebar-infoBlock-item-descp-charect-time"><? echo $obj->time; ?></div>
              <div class="WrapperPage__sidebar-infoBlock-item-descp-charect-distance"><? echo $obj->rasst; ?></div>
            </div>
          </div>
        </div> 
      <?
        }
      ?>


    </div>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 