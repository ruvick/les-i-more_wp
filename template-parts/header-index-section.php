<header id="header" class="header header-index">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<div class="header__block-logo d-flex">
				<a href="<? echo get_permalink(16); ?>" class="logo-icon header__logo"></a>
				<div class="header__logo-line"></div>
				<a href="<?php echo get_permalink(16);?>" class="header__block-logo-text">
					<h6 class="header__block-logo-text-title">Регионы - <br> устойчивое развитие</h6>
					<p class="header__block-logo-text-subtitle">
						Общероссийский ежегодный <br> конкурс
					</p>
				</a>
				<a href="<? bloginfo("url"); ?>" class="header__logo-les">
					<p class="header__logo-les-text">на главную</p>	
				</a>
			</div>

			<div class="header__navigation">
				<a href="<?php echo get_permalink(14);?>" class="header__choose-house-link choose-house-link btn">Выбрать дом</a>
				<a href="tel:+74712543488" class="contacts__phone header__phone">+7 (4712) 54-34-88</a>
				<!-- <a href="tel:+74712543488" class="mob-phone-icon header__mob-phone-icon"></a> -->

				<div class="icon-menu icon-menu_open" aria-label="Бургер меню">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

		</div>
</header>

<!-- Меню -->
<div class="sidebar-menu d-flex">
	<button class="sidebar-menu__close icon-menu_close"></button>
	<div class="sidebar-menu__navigation">
		<h5 class="sidebar-menu__navigation-title">О проекте</h5>
		<ul class="sidebar-menu__navigation-list">
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?echo get_bloginfo("url")?>/#location" onclick = "cloaseMenu()" class="sidebar-menu__navigation-list-item-link">Инновационный поселок</a>
			</li>
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?echo get_bloginfo("url")?>/#ecology" onclick = "cloaseMenu()" class="sidebar-menu__navigation-list-item-link">
					Экология и безопасность
				</a>
			</li>
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?echo get_bloginfo("url")?>/#materials" onclick = "cloaseMenu()" class="sidebar-menu__navigation-list-item-link">
					Качество материалов
				</a>
			</li>
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?echo get_bloginfo("url")?>/#club-buyers" onclick = "cloaseMenu()" class="sidebar-menu__navigation-list-item-link">
					Закрытый клуб покупателей
				</a>
			</li>
		</ul>
		<h5 class="sidebar-menu__navigation-title">Инфраструктура</h5>
		<ul class="sidebar-menu__navigation-list">
			<li class="sidebar-menu__navigation-list-item">	
				<a href="<?php echo get_permalink(14);?>" class="sidebar-menu__navigation-list-item-link">
					Выбрать дом
				</a>
			</li>	
			
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?php echo get_permalink(5);?>" class="sidebar-menu__navigation-list-item-link">
					Объекты рядом
				</a>
			</li>
		</ul>
		<h5 class="sidebar-menu__navigation-title">Как купить</h5>
		<ul class="sidebar-menu__navigation-list">
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?php echo get_permalink(8);?>" class="sidebar-menu__navigation-list-item-link">
					Условия покупки
				</a>
			</li>
			<li class="sidebar-menu__navigation-list-item">
				<a href="<?php echo get_permalink(10);?>" class="sidebar-menu__navigation-list-item-link">
					Ипотека
				</a>
			</li>
			<!-- <li class="sidebar-menu__navigation-list-item">
				<a href="<?php echo get_permalink(19);?>" class="sidebar-menu__navigation-list-item-link">
					Рассрочка
				</a>
			</li> -->
		</ul>
		<h5 class="sidebar-menu__navigation-title"><a href="<?php echo get_permalink(12);?>"
				class="sidebar-menu__navigation-title-link">Контакты</a>
		</h5>
		<ul class="sidebar-menu__navigation-list">
			<li class="sidebar-menu__navigation-list-item">
				<a href="tel:+74712543488" class="sidebar-menu__navigation-list-item-link">+7 (4712) 54-34-88</a>
			</li>
			<li class="sidebar-menu__navigation-list-item">
				<a href="mailto:pyatnitsky46@gmail.com" class="sidebar-menu__navigation-list-item-link">pyatnitsky46@gmail.com</a>
			</li>
		</ul>
	</div>

	<div class="sidebar-menu__contacts">
		<div class="sidebar-menu__nuar_blk nuar_blk"></div>
		<div class="sidebar-menu__contacts-text">
			<p class="sidebar-menu__contacts-text-subtitle">ЖИЗНЬ ДОСТОЙНАЯ ВАС</p>
			<h2 class="sidebar-menu__contacts-text-title">
				Пятницкий <br>
				лес
			</h2>
		</div>
		<a href="<?php echo get_permalink(14);?>" class="sidebar-menu__choose-house-link choose-house-link btn">Выбрать дом</a>
		<a href="tel:+74712543488" class="sidebar-menu__phone contacts__phone">+7 (4712) 54-34-88</a>
	</div>

</div>