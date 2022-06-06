<?php 

/*
Template Name: Страница Ипотека
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			

<section class="page-recurring ipoteka-page">
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
          <h3 class="page-recurring__content-title">
            Жилой комплекс <br>
            «Пятницкий лес» <br>
            аккредитован крупнейшими <br>
            российскими банками.
          </h3>
        </div>

      </div>

      <div class="page-recurring__column">

        <div class="page-recurring__img page-recurring__img-ipoteka">
          <picture><source srcset="<?php echo get_template_directory_uri();?>/img/ipoteka.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/ipoteka.jpg?_v=1652295772944" alt=""></picture>
        </div>

      </div>

    </div>

    <div class="page-recurring__row">
      <h3 class="page-recurring__content-title">Ипотечный калькулятор</h3>
    </div>

  </div>
</section>

<section class="calculator-wrap">
  <div class="_container">
    <form action="#" class="calculator-form">
      <div class="calculator-form__line">
        <div class="calculator-form__column">

          <h6 class="calculator-form__title">
            Стоимость <br>
            дома
          </h6>
          <div class="form__line">
            <select name="form[]" id = "select_home_price" class="calculator-form ipt_select">
              <option value="3840000" selected>3 840 000 - 70 м² черновая отделка</option>
              <option value="5340000">5 340 000 - 70 м² отделка "Комфорт +"</option>
              <option value="4590000">4 590 000 - 93 м² черновая отделка</option>
              <option value="6090000">6 090 000 - 93 м² отделка "Комфорт +"</option>
              <option value="6490000">6 490 000 - 131 м² черновая отделка</option>
              <option value="8490000">8 490 000 - 131 м² отделка "Комфорт +"</option>
            </select>
          </div>
        </div>

        <div class="calculator-form__column">
          <h6 class="calculator-form__title">
            Первоначальный <br>
            взнос
          </h6>
          <div class="form__line">
            <select id = "select_home_vznos" name="form[]" class="calculator-form ipt_select">
              <option value="10" selected>10%</option>
              <option value="20">20%</option>
              <option value="30">30%</option>
              <option value="40">40%</option>
              <option value="50">50%</option>
              <option value="60">60%</option>
            </select>
          </div>
        </div>

        <div class="calculator-form__column">
          <h6 class="calculator-form__title">
            Срок <br>
            кредита
          </h6>
          <div class="form__line">
            <select id = "select_home_srok" name="form[]" class="calculator-form ipt_select">
              <option value="5" selected>5 лет</option>
              <option value="10">10 лет</option>
              <option value="15">15 лет</option>
              <option value="20">20 лет</option>
              <option value="25">25 лет</option>
              <option value="30">30 лет</option>
            </select>
          </div>
        </div>

        <div class="calculator-form__column">
          <h6 class="calculator-form__title">
            Сумма <br>
            кредита
          </h6>
          <div class="calculator-form__column-total">
            <span id = "inp_summ" class="price_formator"></span> руб
          </div>
        </div>

        <div class="calculator-form__column">
          <h6 class="calculator-form__title">
            Ежемесячный <br>
            платеж
          </h6>
          <div class="calculator-form__column-total">
          <span id = "inp_em_pl" class="price_formator"></span> руб
          </div>
        </div>

      </div>
      <button class="calculator-form__btn btn">Оставить заявку</button>
    </form>
  </div>
</section>

<!-- <section class="banki-block">
  <div class="_container">

    <div class="banki-block__table">
      <div class="banki-block__table-head">
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">Банк</div>
          <div class="banki-block__table-cell">Программа кредитования</div>
          <div class="banki-block__table-cell">Ставка</div>
          <div class="banki-block__table-cell">Взнос</div>
          <div class="banki-block__table-cell">Срок</div>
        </div>
      </div>
      <div class="banki-block__table-body">
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/01.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/02.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/03.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/04.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/01.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/02.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
        <div class="banki-block__table-row">
          <div class="banki-block__table-cell">
            <div class="banki-block__table-cell-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/calculator/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/calculator/03.png?_v=1652295772944" alt=""></picture>
            </div>
          </div>
          <div class="banki-block__table-cell">
            Ипотека с господдержкой для семей с детьми <br>
            Господдержка <br>
            Новостройка-стандарт <br>
            Коммерческая ипотека
          </div>
          <div class="banki-block__table-cell">
            5.99% <br>
            11.9% <br>
            17.4% <br>
            17.4%
          </div>
          <div class="banki-block__table-cell">
            от 20% <br>
            от 20% <br>
            от 20% <br>
            от 20%
          </div>
          <div class="banki-block__table-cell">
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет <br>
            до 30 лет
          </div>
        </div>
      </div>
    </div>

  </div>
</section> -->

<section class="ipoteka-page-content">
  <div class="_container">

    <h3 class="page-recurring__content-title title-under">Получить ипотеку просто</h3>
    <ul class="page-recurring__row-list">
      <li class="page-recurring__row-list-item"><span>1</span>
        Оформите заявку <br>
        через сайт или в <br>
        офисе ЖК «Пятницкий Лес»
      </li>
      <li class="page-recurring__row-list-item"><span>3</span>
        Поможем заполнить заявку <br>
        на ипотечный кредит и <br>
        получить одобрение в банке
      </li>
      <li class="page-recurring__row-list-item"><span>2</span>
        Подберем самую выгодную <br>
        программу банка-партнера и <br>
        сделаем необходимые расчеты
      </li>
      <li class="page-recurring__row-list-item"><span>4</span>
        Организуем сделку и <br>
        подписание договора <br>
        в банке
      </li>
    </ul>

  </div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 