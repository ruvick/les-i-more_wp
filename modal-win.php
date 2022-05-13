<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-JS -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/popup.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/popup.jpg?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="popup__form-block">  
					<h2>Заказать звонок</h2> 
					
					<div class="headen_form_blk">
						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
						<form action="#" class="form universal_send_form">
							
							<div class="SendetMsg form_msg" style="display:none;">
								Ваше сообщение успешно отправлено.
							</div>

							<div class="form__line">
								<input autocomplete="off" type="text" name="name" placeholder="Имя" data-error="Ошибка" data-value="Имя" class="popup__form-input input _req">
								<input autocomplete="off" type="text" name="tel" placeholder="Телефон" data-error="Ошибка" data-value="Телефон" class="popup__form-input input _phone _req">
							</div>
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type = "button" class="popup__form-btn form__btn btn u_send">Заказать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->

<!-- Окно Подобрать коттедж -->
<div class="popup popup_cottage">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/popup.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/popup.jpg?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="popup__form-block">  
					<h2>Заказать звонок</h2> 
					
					<div class="headen_form_blk">
						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
						<form action="#" class="form universal_send_form">
							
							<div class="SendetMsg form_msg" style="display:none;">
								Ваше сообщение успешно отправлено.
							</div>

							<div class="form__line">
								<input autocomplete="off" type="text" name="name" placeholder="Имя" data-error="Ошибка" data-value="Имя" class="popup__form-input input _req">
								<input autocomplete="off" type="text" name="tel" placeholder="Телефон" data-error="Ошибка" data-value="Телефон" class="popup__form-input input _phone _req">
							</div>
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type = "button" class="popup__form-btn form__btn btn u_send">Заказать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#cottage" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->


<!-- Всплывающее окно -->
<div class="popup popup-houses popup_houses">
	<div class="popup-houses__content popup__content">
		<div class="popup-houses__body popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup-houses__item popup__item d-flex">
				<div class="popup-houses__img popup__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/popup.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/popup.jpg?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="popup__descp">  
					<h2 class="popup-houses__title">Коттедж №119</h2> 
					<div class="popup-houses__identifier"># 8084962</div>

					<div class="popup-houses__charect-block">

						<div class="popup-houses__charect-block-row d-flex">
							<div class="popup-houses__charect-block-cell">Общая площадь коттеджа:</div>
							<div class="popup-houses__charect-block-cell">185.56 м2</div>
						</div>

						<div class="popup-houses__charect-block-row d-flex">
							<div class="popup-houses__charect-block-cell">Внутренняя площадь:</div>
							<div class="popup-houses__charect-block-cell">163.91 м2</div>
						</div>

						<div class="popup-houses__charect-block-row d-flex">
							<div class="popup-houses__charect-block-cell">Площадь террасы:</div>
							<div class="popup-houses__charect-block-cell">21.65 м2</div>
						</div>

						<div class="popup-houses__charect-block-row d-flex">
							<div class="popup-houses__charect-block-cell">Площадь участка:</div>
							<div class="popup-houses__charect-block-cell">450.00 м2</div>
						</div>

						<div class="popup-houses__charect-block-row d-flex">
							<div class="popup-houses__charect-block-cell">Планировка:</div>
							<div class="popup-houses__charect-block-cell">Свободная</div>
						</div>
						
					</div>

					<div class="popup-houses__price">23 538 706 руб</div>

					<a href="#callback" class="popup-houses__btn btn _popup-link">Записатся на просмотр</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#houses" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->
<!-- ========================================================================================================================= -->
<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close"><? _e("закрыть", "rubex"); ?></div>

		<div class="modalline" id="lineIcon">
		</div>

		<div class="modalline" id="lineMsg">
		</div>
	</div>
</div>

<div style="display: none;">
	<div class="box-modal box-modal-new box-modal-new__cust" id="question">
		<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
		<img src="<?php bloginfo("template_url") ?>/img/similar-01.jpg" loading="lazy" />
		<div class="formArctikBlk mod-zagr-tur">
			<h2>Заказать звонок <span class='tkName'></span></h2>
			<p>Наши специалисты свяжутся с Вами в течение 15 минут</p>

			<form action="#" class="form-question">
				<div class="SendetMsg" style="display:none">
					Ваше сообщение успешно отправлено.
				</div>
				<div class="headen_form_blk">
					<input type="text" name="name" placeholder="Имя*" id="form-question-name" class="form-question__input input">
					<input type="tel" name="tel" placeholder="Телефон*" id="form-question-tel" class="form-question__input input">
				</div>
				<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312); ?>">условиями обработки персональных данных</a>.</div>
				<button type="submit" class="newButton btn">Отправить</button>
			</form>

		</div>
	</div>
</div>