<?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			

<section class="page-recurring">
	<div class="page-recurring__container _container">

		<div class="page-recurring__wrapper">

			<div class="page-recurring__column">

				<div class="contactsNav-block page-recurring-bg">
					<h1 class="contactsNav-block__title">КОНТАКТЫ</h1>
					<h2 class="contactsNav-block__subtitle">Наш офис</h2>
					<ul class="contactsNav-block__list">
						<li class="contactsNav-block__list-item">
							<p>Адрес</p>
							<span>
								Курск, ул. 50 лет Октября, <br>
								дом 100
							</span>
						</li>
						<li class="contactsNav-block__list-item">
							<p>Время работы</p> <span>
								Пн-Пт: 9:00 – 21:00 <br>
								Сб-Вс: 10:00 – 20:00
							</span>
						</li>
						<li class="contactsNav-block__list-item">
							<p>Телефон</p>
							<div class="contactsNav-block__list-item-inner">
								<span>
									<a href="tel:+74712543488">+7 (4712) 54-34-88</a>
								</span>
								<a href="#callback" class="contactsNav-block__btn _popup-link btn">Заказать звонок</a>
							</div>
						</li>
						<li class="contactsNav-block__list-item">
							<p>E–mail</p> <span><a href="mailto:pyatnitsky46@gmail.com">pyatnitsky46@gmail.com</a></span>
						</li>
					</ul>
				</div>

				<div class="page-recurring__img">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/contacts-02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/contacts-02.jpg?_v=1652295772944" alt=""></picture>
				</div>

			</div>

			<div class="page-recurring__column">

				<div class="page-recurring__img">
					<picture><source srcset="<?php echo get_template_directory_uri();?>/img/contacts-01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/contacts-01.jpg?_v=1652295772944" alt="Картинка блока"></picture>
				</div>

				<div class="page-recurring__block-descp">
					<h2 class="page-recurring__block-descp-title title-under">
						Посетите наш <br>
						офис продаж
					</h2>
					<p class="page-recurring__block-descp-subtitle">
						Дружба может приносить намного больше пользы в виде денег, связей и возможностей, если относится к ней
						по-другому.
					</p>
					<p class="page-recurring__block-descp-subtitle">
						ЖК «Пятницкий» - это сообщество уникальных людей, которые уверенным взглядом смотрят в будущее.
					</p>
					<p class="page-recurring__block-descp-subtitle">
						«Если собрать вместе дюжину человек, с которыми мы проводим бОльшую часть нашего времени, и разделить
						все их достижения, успехи и проблемы поровну - можно с большой точностью предугадать, что это как раз
						то, где Вы скорее всего окажетесь очень-очень скоро.
					</p>
					<p class="page-recurring__block-descp-subtitle">
						Если уже не оказались.»
					</p>
				</div>
				<div id="map" class="page-recurring__block-map"></div>

			</div>

		</div>

	</div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); 
