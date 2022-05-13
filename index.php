<?php get_header(); ?>

<?php get_template_part('template-parts/header-index-section');?>

<main class="page">

<section id="first-screen" class="first-screen">
	<a href="#advantages" class="scroll-icon-block widget-icon blink">
		<p>Прокручивайте <br> страницу</p>
	</a>
	<div class="first-screen__container _container">
		<p class="first-screen__subtitle anim_pl_deviz element-animation">ЖИЗНЬ ДОСТОЙНАЯ ВАС</p>
		<h1 class="first-screen__title anim_pl_nadp element-animation">Пятницкий лес</h1>
	</div>
</section>

<section id="advantages" class="advantages">
	<div class="_container element-animation anim_preim">
		<h2 class="advantages__title">4 ВЕЛИКОЛЕПНЫХ ПРЕИМУЩЕСТВА</h2>
		<div class="advantages__row d-flex ">

			<div class="advantages__item d-flex">
				<div class="advantages__item-number">1</div>
				<div class="advantages__item-text">
					Инновационный <br>
					поселок
				</div>
			</div>

			<div class="advantages__item d-flex">
				<div class="advantages__item-number">2</div>
				<div class="advantages__item-text">
					Экология и <br>
					безопасность
				</div>
			</div>

			<div class="advantages__item d-flex">
				<div class="advantages__item-number">3</div>
				<div class="advantages__item-text">
					Качество <br>
					материалов
				</div>
			</div>

			<div class="advantages__item d-flex">
				<div class="advantages__item-number">4</div>
				<div class="advantages__item-text">
					Закрытый клуб <br>
					покупателей
				</div>
			</div>

		</div>
	</div>
</section>

<section id="location" class="location">
	<div class="_container">

		<div class="location__row">

			<div class="location__descp element-animation anim_blk_1">
				<div class="big-number element-animation anim_blk_1">1</div>
				<p class="location__descp-text ">
					Это ультра современный комплекс комфорт-класса европейского уровня, не имеющий аналогов в Курской
					области и состоящий из 260 домов
				</p>
				<p class="location__descp-text">
					здесь предусмотрено все необходимое для комфортной загородной жизни
				</p>
				<p class="location__descp-text">
					Торговый центр и частный детский сад специально для жителей поселка
				</p>
				<p class="location__descp-text">
					приватная внутренняя территория комплекса оборудованна оригинальными зонами для отдыха спорта и детских
					игр
				</p>
				<p class="location__descp-text">
					Велосипедные и беговые дорожки, пространства для пеших прогулок и даже собственный сквер - все это так
					же в полном распряжении жителей ЖК Пятницкий.
				</p>
			</div>

			<div class="location__navigation">
				<h2 class="location__navigation-title title element-animation anim_blk_1_head">ИННОВАЦИОННЫЙ ПОСЕЛОК</h2>
				<p class="location__navigation-subtitle  element-animation anim_blk_1_head2">Локация Пятницкий лес</p>
				<div class="location__navigation-imagesBlock">
					<div class="location__navigation-imagesBlock-img  element-animation anim_blk_1_img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/location.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/location.jpg?_v=1652295772944" alt=""></picture>
					</div>
					<a href="<?php echo get_permalink(5);?>" class="location__navigation-imagesBlock-link btn">Смотреть карту</a>
					<div class="location__navigation-imagesBlock-map element-animation anim_blk_1_map">
						<div class="location__navigation-imagesBlock-map-nuar_blk nuar_blk"></div>
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/map-img.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/map-img.jpg?_v=1652295772944" alt=""></picture>
					</div>
				</div>
			</div>

		</div>

		<div class="location__advantagesBlock">

			<div class="location__advantagesBlock-choice">
				<h3 class="location__advantagesBlock-choice-title element-animation anim_preim">
					Преимущества
					планировочных
					решений
				</h3>
				<a href="choose-house.html" class="location__advantagesBlock-choice-link btn element-animation anim_preim">Выбрать дом</a>
			</div>

			<div class="location__advantagesBlock-descp element-animation anim_preim">
				<p class="location__advantagesBlock-descp-paragraph">
					Дома с террасами 120 м²;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Широкий ассортимент планировочных решений квартир – от 1- до 5-комнатных, площадь квартир – от 46,2 до
					175,8 м²;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Количество квартир на этаже – от 3 до 6;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Удобные кухни-гостиные до 33,6 м²;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Возможность установки дровяных каминов в квартирах на последнем этаже;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Квартиры с master bedroom с собственной гардеробной и ванной комнатой;
				</p>
				<p class="location__advantagesBlock-descp-paragraph">
					Теплые лоджии в каждой квартире.
				</p>
			</div>

			<div class="location__advantagesBlock-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/advantages.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/advantages.jpg?_v=1652295772944" alt=""></picture>
			</div>

		</div>

	</div>
</section>

<section id="ecology" class="ecology">

	<div class="_container">
		<div class="ecology__row">
			<div class="ecology__text-blcok">
				<h2 class="ecology__text-blcok-title title">ЭКОЛОГИЯ И БЕЗОПАСНОСТЬ</h2>
				<p class="ecology__text-blcok-subtitle">Жизнь класса Green</p>
				<p class="ecology__text-blcok-paragraph">
					Большое внимание уделено экологичности проекта. <br>
					В шаговой доступности распологается лесной массив под названием <br>
					Пятницкий Лес, что и дало наименование комплексу.
				</p>
			</div>
			<div class="ecology__big-number big-number">2</div>
		</div>
	</div>

	<div class="ecology__BigImg"></div>

	<div class="_container">

		<p class="ecology__paragraph">
			Произведено полное озеленение комплекса (газоны, деревья, кустарники) <br>
			Различьные виды ростительности подобраны таким образом, чтобы территория выглядела декоративно круглый год.
		</p>

		<div class="ecology__ImgBlock">
			<div class="ecology__ImgBlock-item">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/ecology/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/ecology/01.jpg?_v=1652295772944" alt=""></picture>
			</div>

			<div class="ecology__ImgBlock-item">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/ecology/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/ecology/02.jpg?_v=1652295772944" alt=""></picture>
			</div>

			<div class="ecology__ImgBlock-item">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/ecology/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/ecology/03.jpg?_v=1652295772944" alt=""></picture>
			</div>
		</div>

		<div class="ecology__info-block">
			<div class="ecology__info-block-item">
				<div class="ecology__info-block-item-icon ecology__info-block-item-icon_01"></div>
				<div class="ecology__info-block-item-text">
					Так же для обеспечения жильцов водой используется центральный водопровод
					с водой из артезианской скважены.
				</div>
			</div>
			<div class="ecology__info-block-item">
				<div class="ecology__info-block-item-icon ecology__info-block-item-icon_02"></div>
				<div class="ecology__info-block-item-text">
					Согласно последним исследованиям человек гараздо быстрее восстанавливает
					свое состояние и самочувствие, проживая в зеленой зоне, а это в разы улучьшает
					качество жизни
				</div>
			</div>
		</div>

		<div class="ecology__info-card">
			<div class="ecology__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/info-card.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/info-card.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<div class="ecology__info-card-descp">
				<p class="ecology__info-card-descp-paragraph">
					Территория ЖК Пятницкий Лес является полностью
					закрытой и охраняемой
				</p>
				<p class="ecology__info-card-descp-paragraph">
					Вся территория поселка оборудована камерами видеонаблюдения
				</p>
				<p class="ecology__info-card-descp-paragraph">
					Высокий уровень безопасности обеспечит наличие мультифакторной аутентификации на въезде в жилой комплекс
					Система проверяет сразу несколько элементов: лицо, карта, брелок, пин-код, мобильный идентификатор,
					доступ по временной ссылке
				</p>
				<div class="ecology__info-card-descp-iconBlcok">
					<div class="ecology__info-card-descp-iconBlcok-icon ecology__info-card-descp-iconBlcok-icon_01"></div>
					<div class="ecology__info-card-descp-iconBlcok-icon ecology__info-card-descp-iconBlcok-icon_02"></div>
					<div class="ecology__info-card-descp-iconBlcok-icon ecology__info-card-descp-iconBlcok-icon_03"></div>
					<div class="ecology__info-card-descp-iconBlcok-icon ecology__info-card-descp-iconBlcok-icon_04"></div>
					<div class="ecology__info-card-descp-iconBlcok-icon ecology__info-card-descp-iconBlcok-icon_05"></div>
				</div>
				<p class="ecology__info-card-descp-paragraph">
					Так же частная охранная группа готова круглосуточно оберегать покой жителей поселка Пятницкий
				</p>
			</div>
		</div>

	</div>
</section>

<section id="materials" class="materials">

	<div class="materials__bg">
		<div class="_container">
			<div class="materials-blcok">
				<div class="materials-blcok__big-number big-number">3</div>
				<div class="materials-blcok__descp">
					<h2 class="materials-blcok__descp-title title">
						КАЧЕСТВО <br>
						МАТЕРИАЛОВ
					</h2>
					<p class="materials-blcok__descp-subtitle">
						При возведение домов в
						ЖК «Пятницкий Лес»
						используются только
						материалы премиального
						класса.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="_container">

		<div class="materials-blcok__info-card">
			<div class="materials-blcok__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/materials/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/materials/01.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<p class="materials-blcok__info-card-text">
				Мягкая модифицированная черепица.
				Срок эксплуатации значительно превосходит аналоги.
				Улучшенная звукоизоляция (не слышно дождь)
				Долговечность более 50 лет (заводская гарантия)
			</p>
		</div>

		<div class="materials-blcok__info-card">
			<div class="materials-blcok__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/materials/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/materials/02.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<p class="materials-blcok__info-card-text">
				Керамический кирпич (пожаростойкий)
				У нас выполнен теплотехнический расчёт, на основании которого правильно подобран стеновой материал.
				Хороший климат в доме ВСЕГДА.
			</p>
		</div>

		<div class="materials-blcok__info-card">
			<div class="materials-blcok__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/materials/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/materials/03.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<p class="materials-blcok__info-card-text">
				Мы не оштукатуриваем фасады домов, так как
				у штукатурки срок службы 10 лет, а у облицовочного
				кирпича 75 лет (на основе СНИПа)
			</p>
		</div>

		<div class="materials-blcok__info-card">
			<div class="materials-blcok__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/materials/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/materials/04.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<p class="materials-blcok__info-card-text">
				Окна трёхкамерный энергосберегающий стеклопакет
				с дорогой качественной ламинацией. С дорогой
				немецкой фурнитурой.
			</p>
		</div>

		<div class="materials-blcok__info-card">
			<div class="materials-blcok__info-card-img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/materials/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/materials/05.jpg?_v=1652295772944" alt=""></picture>
			</div>
			<p class="materials-blcok__info-card-text">
				Фундамент ленточного типа и столбчатого под
				отдельно стоящие колонны.
			</p>
		</div>

	</div>

</section>

<section id="club-buyers" class="club-buyers">

	<div class="club-buyers__bg materials__bg">
		<div class="_container">
			<div class="materials-blcok">
				<div class="club-buyers__big-number big-number">4</div>
				<div class="materials-blcok__descp">
					<h2 class="materials-blcok__descp-title title">
						ЗАКРЫТЫЙ <br>
						КЛУБ <br>
						ПОКУПАТЕЛЕЙ
					</h2>
					<p class="materials-blcok__descp-subtitle">
						Сила окружения
						для бизнеса и дружбы.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="club-buyers__descp">
		<div class="_container">
			<p class="club-buyers__descp-paragraph">
				Дружба может приносить намного больше пользы в виде денег, связей и возможностей, если относится к ней
				по-другому.
			</p>
			<p class="club-buyers__descp-paragraph">
				ЖК «Пятницкий» - это сообщество уникальных людей, которые уверенным взглядом смотрят в будущее.
			</p>
			<p class="club-buyers__descp-paragraph">
				«Если собрать вместе дюжину человек, с которыми мы проводим бОльшую часть нашего времени, и разделить все
				их достижения, успехи и проблемы поровну - можно с большой точностью предугадать, что это как раз то, где
				Вы скорее всего окажетесь очень-очень скоро.
			</p>
			<p class="club-buyers__descp-paragraph">
				Если уже не оказались.»
			</p>
		</div>
	</div>

</section>

<section id="developer" class="developer">
	<div class="_container">
		<div class="developer__row d-flex">

			<div class="developer__img">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/developer.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/developer.jpg?_v=1652295772944" alt=""></picture>
			</div>

			<div class="developer__descp">
				<div class="developer__descp-logo"></div>
				<h2 class="developer__descp-title">ЗАСТРОЙЩИК</h2>
				<p class="developer__descp-subtitle">
					Победа в конкурсе гарантирует устойчивое финансирование нашего
					проекта. Наши покупатели могут быть уверенны в успешном завершении строительства и в обеспечении поселка
					всей необходимой инфраструктурой.
				</p>
			</div>

		</div>
	</div>
</section>

<?php get_template_part('template-parts/contacts-section');?>

</main>

<?php get_footer(); ?> 