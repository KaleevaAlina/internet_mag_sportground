<!DOCTYPE html>
<html lang="ru">
<head>
    <!--Гугл аналитика-->
			<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171527657-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-171527657-1');
		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171527657-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171527657-1');
</script>

	<!--Гугл аналитика-->
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
	<meta name="description" content="Интернет магазин &laquo;Sport Ground&raquo;, онлайн продажа спортивных товаров. Большое количество товаров для спорта, здорового образа жизни и повседневной одежды.">
	<meta name="keywords" content="Интернет магазин &laquo;Sport Ground&raquo;, онлайн продажа товаров">
    <title>Интернет магазин Sport Ground</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body vlink="#c70101">
    <section id="up" class="promo">
        <div class="container">
            <header class="header">
                <a href="#" class="header__logo">
                    <img src="icons/logo1.png" title="Интернет магазин стильной одежды" alt="Интернет магазин">
                </a>
				<div class="invk">
					<a target="_blank" href="https://www.instagram.com/sport.groundd/?igshid=zye5ih15nbx" class="in">
						<img src="img/in.svg" title="Интернет магазин Sport Ground в инстаграмм" alt="Интернет магазин Sport Ground в in">
					</a>
					<a href="#" class="vk">
						<img src="img/vk.svg" title="Интернет магазин Sport Ground в вконтакте" alt="Интернет магазин Sport Ground в vk">
					</a>
			</div>
                <div class="header__official">
				    <span>&#64; E-mail:</span><br>
				    <span>sport.ground@bk.ru</span>
                    <!--Официальный представитель
                    <span>Adidas, Nike</span>-->
                </div>
                <div class="header__contacts">
                    <a href="tel:+74999228974" class="header__phone">+375 (29) 241-65-31</a>
                    <button data-modal="consultation" class="button">заказать звонок</button>
                </div>
            </header>

            <div class="promo__wrapper">
                <h1 class="promo__header">Спортивная одежда</h1>
                <h2 class="promo__subheader">Интернет магазин Sport Ground </h2>

                <div class="promo__icons">
                    <div class="promo__icon">
                        <img src="icons/main_screen/timer.png" alt="timer">
						 Обычная доставка почтой (2-4дня)-4 руб
                    </div>
                    <div class="promo__icon">
                        <img src="icons/main_screen/hand-cart.png" alt="hand-cart">
                        Экспресс-курьером до дверей (1-2дня)-6 руб
                    </div>
                    <div class="promo__icon">
                        <img src="icons/main_screen/messages.png" alt="messages">
                        Оплата при получении
                    </div>
                </div>

                <button data-modal="consultation" class="button button_main">заказать консультацию</button>
                <div class="promo__link">
                   <!--или-->
                    <a target="_blank" href="kat/tovar.pdf">&nbsp;ПЕРЕЙТИ В КАТАЛОГ</a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h2 class="title">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <img src="icons/advantages/cup.png" alt="cup" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Широкий ассортимент<br>
						Экономия времени<br>
						Низкая цена<br>
                    </div>
                    <div class="advantages__descr">
                        Наши сотрудники всегда готовы поделиться своим опытом
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="icons/advantages/heart.png" alt="heart" class="advantages__icon advantages__icon_animated">
                    <div class="advantages__subtitle">
                        Комфортная одежда для занятия спортом<br>
						Качественная одежда<br>
						Свобода выбора<br>
                    </div>
                    <div class="advantages__descr">
                        Новые коллекции появляются в интернет-магазинах раньше, чем в обычных!           
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="icons/advantages/shoe.png" alt="shoe" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Быстрая доставка<br>
						Покупки не выходя из дома<br>
						Анонимность покупок<br>
                    </div>
                    <div class="advantages__descr">
                        Не нужно покидать квартиру. Все что требуется – это выход в интернет.
                        Покупки можно совершать в любое время! 
                        <!--<a href="#">I LOVE RUNNING.</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation">
        <div class="container">
            <h2 class="title title_left">
                Получите бесплатную консультацию<br>
                <!--по подбору пульсометра--> 
            </h2>
            <div class="consultation__descr">
                Просто заполните форму заявки<br> 
                <!--и мы перезвоним вам в течении 10 минут-->
            </div>
            <form id="consultation-form" class="feed-form" action="#">
                <input name="name" required placeholder="Ваше имя" type="text"> 
                <input name="phone" required placeholder="Ваш телефон"> 
                <input name="email" required placeholder="Ваш E-mail" type="email"> 

                <button class="button button_submit">заказать консультацию</button>
            </form>
        </div>
    </section>

    <div class="carousel">
        <div class="container">
            <div class="carousel__inner">
                <div>
                    <img src="imggo/cropped1.jpg" alt="slide">
                </div>
                <div>
                    <img src="imggo/cropped2.jpg" alt="slide">
                </div>
                <div>
                    <img src="imggo/cropped3.jpg" alt="slide">
                </div>
				<div>
                    <img src="imggo/cropped4.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/atmos1.jpg" alt="slide">
                </div>
                <div>
                    <img src="imgmo/atmos2.jpg" alt="slide">
                </div>
                <div>
                    <img src="imgmo/atmos3.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/atmos4.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/matthew1.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/matthew2.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/matthew3.jpg" alt="slide">
                </div>
                <div>
                    <img src="imggo/basict1.jpg" alt="slide">
                </div>
                <div>
                    <img src="imggo/basict2.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/swoosh.jpg" alt="slide">
                </div>
				<div>
                    <img src="imgmo/stripes.jpg" alt="slide">
                </div>
            </div>
        </div>
    </div>

    <section class="catalog">
        <div class="container">
            <h2 class="title">Каталог одежды</h2>
            <ul class="catalog__tabs">
                <li class="catalog__tab catalog__tab_active"><div>Для мужчин</div></li>
                <li class="catalog__tab"><div>Для женщин</div></li>
                <li class="catalog__tab"><div>Для детей</div></li>
            </ul>

            <div class="catalog__content catalog__content_active">
	            <!--товар на главной странице-->		
			    <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/swoosh.jpg" alt="Atmos x Nike LeBron Basketball T-shirt" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Nike Nrg Swoosh<br>Logo</div>
                            <div class="catalog-item__descr">Размер: S,M</div>
                            <a href="#" class="catalog-item__link" >ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> легкая футболка с культовыми тремя полосками;
                            </li>
                            <li>
                            Тонкий трикотаж: 100% хлопок;
                            </li>
                            <li>
                            Состав: 100% хлопок;</li>
                            <li>
                            Цвет модели: Black / White.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">85 руб.</div>
                            <div class="catalog-item__price">80 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<!--товар на главной странице-->
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/swind.jpg" alt="Штаны Nike Sportswear Windrunner" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Штаны Nike Sportswear<br> Windrunner</div>
                            <div class="catalog-item__descr">Размер: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Брюки Nike Sportswear Windrunner свободного кроя выполнены из легкого нейлона для полного комфорта;
                            </li>
                            <!--<li>
                            Тонкий трикотаж: 100% хлопок;
                            </li>-->
                            <li>
                            Состав: нейлон;</li>
                            <li>
                            Цвет модели: Black.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">115 руб.</div>
                            <div class="catalog-item__price">110 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/nmatt.jpg" alt="Майка Nike Matthew Williams NRG cotton T-SHIRT" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Майка Nike Matthew<br> Williams NRG cotton<br> T-SHIRT</div>
                            <div class="catalog-item__descr">Размеры: S,M,L</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Ткань Nike для максимального комфорта;
                            </li>
                            <li>
                            Эргономичный крой для естественной свободы движений;
                            </li>
                            <!--<li>
                            Состав: 100% хлопок;</li>-->
                            <li>
                            Цвет модели: White.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">75 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/stripes.jpg" alt="Футболка 3-stripes Adidas originals" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Футболка 3-stripes<br> Adidas originals  </div>
                            <div class="catalog-item__descr">Размеры: S,M,L</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Новинки коллекции Nike;
                            </li>
                            <li>
                            Летняя коллекция 2020;
                            </li>
                            <li>
                            Состав: 100% хлопок;</li>
                            <li>
                            Цвет: Белый,чёрный.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">70 руб.</div>
                            <div class="catalog-item__price">65 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/atmos1.jpg" alt="Atmos x Nike LeBron Basketball T-shirt" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Atmos x Nike LeBron Basketball T-shirt </div>
                            <div class="catalog-item__descr">Размеры: s, m, l</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Новинки коллекции Nike;
                            </li>
                            <li>
                            Летняя коллекция 2020;
                            </li>
                            <li>
                            Состав: 100% хлопок;</li>
                            <li>
                            Цвет: Черный.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">73 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/drydna.jpg" alt="Мужские баскетбольные шорты Nike Dry Dna Short Black" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Мужские баскетбольные<br> шорты Nike Dry Dna<br> Short Black </div>
                            <div class="catalog-item__descr">Размеры: S</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Новинки коллекции Nike;
                            </li>
                            <li>
                            Удобная, спортивная, юношеская модель для тренировок, уроков физкультуры и активного отдыха.;
                            </li>
                            <!--<li>
                            Состав: 100% хлопок;</li>-->
                            <li>
                            Цвет: Черный с белыми вставками.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">68 руб.</div>
                            <div class="catalog-item__price">65 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/matthew2.jpg" alt="pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Nike Matthew Williams<br> NRG cotton T-SHIRT</div>
                            <div class="catalog-item__descr">Размеры: s, m, l
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list">
                            <li>Технология Dri-Fit обеспечивает хороший воздухообмен и регулирует влажность.;
                            </li>
                            <li>
                            Спортивная футболка выполнена из трикотажа.
                            </li>
                            <li>
                             Детали: круглый вырез горловины, короткие рукава.</li>
                            <li>
                            Состав: Хлопок - 57%, Полиэстер - 43%.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">7 390 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/pipes.jpg" alt="Штаны adidas originals Pipe Sweat Pants" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Штаны adidas originals<br> Pipe Sweat Pants</div>
                            <div class="catalog-item__descr">Размеры: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Этот спортивный стиль вдохновляет деталями в стиле ретро и современную эстетику;
                            </li>
                            <li>
                            Подгонка, материалы и дизайн были тщательно переработаны, чтобы создать новую икону;
                            </li>
                            <li>
                             Спортивные штаны с контрастной окантовкой по швам;</li>
                            <li>
                            Они сделаны из ультрамягкого хлопкового французского махра.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">100 руб.</div>
                            <div class="catalog-item__price">95 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/jord.jpg" alt="Шорты Nike Jordan x Clot" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Шорты Nike Jordan x Clot <br>Mesh x Clot Mesh</div>
                            <div class="catalog-item__descr">Рамзеры: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> сочетание баскетбольных традиций с современным азиатским fashion-брэндом Clot;
                            </li>
                            <li>
                            Дышащая сетчатая ткань среднего веса создает первоклассный образ;
                            </li>
                            <li>
                             Яркие цвета и эффектная графика помогут тебе выделиться из толпы;</li>
                            <li>
                            Clot — гонконгский бренд уличной одежды.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">75 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/ventmax.jpg" alt="Шорты Nike Jordan x Clot" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Шорты Nike Pro Flex<br> Vent Max</div>
                            <div class="catalog-item__descr">Рамзеры: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Шорты Nike Pro Flex Vent Max из легкой эластичной ткани не ограничивают движений даже на самых интенсивных тренировках.;
                            </li>
                            <li>
                            Эластичный заворачивающийся пояс позволяет регулировать и надежно фиксировать посадку;
                            </li>
                            <li>
                             Цвет модели: Черный/Белый;</li>
                            <!--<li>
                            Clot — гонконгский бренд уличной одежды.
                            </li>-->
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">58 руб.</div>
                            <div class="catalog-item__price">55 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imgmo/psg.jpg" alt="Футболка PSG" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Футболка PSG</div>
                            <div class="catalog-item__descr">Размер: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li> Футболка Paris Saint-Germain из хлопка обеспечивает комфорт на весь день;
                            </li>
                            <li>
                            Тонкий трикотаж: 100% хлопок;
                            </li>
                            <li>
                            Состав: 100% хлопок;</li>
                            <li>
                            Цвет модели: Black.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">73 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>				
				
            </div>
			
            <div class="catalog__content">
			    <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/adibr.jpg" alt="ADIDAS ADIBREAK PANT" class="catalog-item__img">
                            <div class="catalog-item__subtitle">ADIDAS ADIBREAK PANT</div>
                            <div class="catalog-item__descr">Размеры: S</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>  Модель прямого кроя;
                            </li>
                            <li>
                            Детали: эластичный пояс, внутренняя кулиска, по бокам застежка на кнопки;
                            </li>
                            <li>
                             adidas уже на протяжении многих лет разрабатывает лучшие спортивные изделия с уникальными характеристиками;</li>
                            <li>
                            Состав: Полиэстер - 100%.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">115 руб.</div>
                            <div class="catalog-item__price">110 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
			
			    <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/spw.jpg" alt="Платье Nike Sportswear " class="catalog-item__img">
                            <div class="catalog-item__subtitle">Платье Nike Sportswear   </div>
                            <div class="catalog-item__descr">Размеры: S,M </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>Платье Nike Sportswear из легкой сетчатой ткани и хлопкового материала джерси обеспечивает комфорт и защиту;
                            </li>
                            <li>
                            Цвет модели: черный, белый;
                            </li>
                            <!--<li>
                            Эти шорты, изготовленные из переработанного полиэстера для придания им гладкости, сбоку снабжены логотипом Adibreak;</li>
                            <li>
                            гарантируют спортсменам скорость, силу и высокие результаты.
                            </li>-->
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">75 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
			
			    <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/aadibr.jpg" alt="Шорты Adidas Originals Adibreak" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Шорты Adidas Originals<br> Adibreak  </div>
                            <div class="catalog-item__descr">Размеры: XS,S</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>ВДОХНОВЛЕННЫЕ ВИНТАЖНЫМ СТИЛЕМ ШОРТЫ НА КНОПКАХ;
                            </li>
                            <li>
                            Винтажный стиль Adidas получает современную переделку;
                            </li>
                            <li>
                            Эти шорты, изготовленные из переработанного полиэстера для придания им гладкости, сбоку снабжены логотипом Adibreak;</li>
                            <!--<li>
                            гарантируют спортсменам скорость, силу и высокие результаты.
                            </li>-->
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">68 руб.</div>
                            <div class="catalog-item__price">65 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/spwear.jpg" alt="ADIDAS ORIGINALS CROPPED" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Платье Nike Sportswear  </div>
                            <div class="catalog-item__descr">Рамзеры: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>Adidas создает свои коллекции с применением неизменно передовых технологий и материалов.;
                            </li>
                            <li>
                            adidas предлагает широкий выбор товаров, начиная от одежды и обуви для профессиональных спортсменов до вещей премиум-класса;
                            </li>
                            <li>
                            adidas уже на протяжении многих лет разрабатывает лучшие спортивные изделия с уникальными характеристиками;</li>
                            <li>
                            гарантируют спортсменам скорость, силу и высокие результаты.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">75 руб.</div>
                            <div class="catalog-item__price">70 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/cropped1.jpg" alt="ADIDAS ORIGINALS CROPPED" class="catalog-item__img">
                            <div class="catalog-item__subtitle">ADIDAS ORIGINALS<br> CROPPED</div>
                            <div class="catalog-item__descr">Размеры: xs, s, m</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>Adidas создает свои коллекции с применением неизменно передовых технологий и материалов.;
                            </li>
                            <li>
                            adidas предлагает широкий выбор товаров, начиная от одежды и обуви для профессиональных спортсменов до вещей премиум-класса.;
                            </li>
                            <li>
                            adidas уже на протяжении многих лет разрабатывает лучшие спортивные изделия с уникальными характеристиками;</li>
                            <li>
                            Цвет: белый, черный.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">58 руб.</div>
                            <div class="catalog-item__price">54 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/basict1.jpg" alt="ADIDAS ORIGINALS CROPPED" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Майка Nike Sportswear<br> Basic T-shirt</div>
                            <div class="catalog-item__descr">Размер: s,m,l</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>Мягкая хлопковая ткань обеспечивает комфорт.;
                            </li>
                            <li>
                            Эластичная горловина из рубчатой ткани не ограничивает движений;
                            </li>
                            <li>
                            Цвет модели: белый;</li>
                            <li>
                            гарантируют спортсменам скорость, силу и высокие результаты.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">63 руб.</div>
                            <div class="catalog-item__price">60 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				<div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="imggo/tietee.jpg" alt="Adidas Women 3S Tie Tee" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Adidas Women 3S Tie Tee</div>
                            <div class="catalog-item__descr">Размеры: S,M</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list ">
                            <li>Спортивное назначение:фитнес;
                            </li>
                            <li>
                            Состав: полиэстер, эластан;
                            </li>
                            <li>
                            Цвет модели: черный;</li>
                            <!--<li>
                            гарантируют спортсменам скорость, силу и высокие результаты.
                            </li>-->
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">53 руб.</div>
                            <div class="catalog-item__price">50 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
				
            </div>
			<!--
            <div class="catalog__content">
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list">
                            <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;
                            </li>
                            <li>
                            Вы увидите информативный графический индикатор целевых тренировочных зон пульса;
                            </li>
                            <li>
                            Также Вы увидите информацию о расходе калорий за тренировку;</li>
                            <li>
                            Вы сможете посмотреть данные по 10 тренировкам.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>
                        <ul class="catalog-item__list">
                            <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;
                            </li>
                            <li>
                            Вы увидите информативный графический индикатор целевых тренировочных зон пульса;
                            </li>
                            <li>
                            Также Вы увидите информацию о расходе калорий за тренировку;</li>
                            <li>
                            Вы сможете посмотреть данные по 10 тренировкам.
                            </li>
                            <a href="#" class="catalog-item__back">назад</a>
                        </ul>
                    </div>
                    <hr>

                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="button button_mini">КУПИТЬ</button>
                    </div>
					
                </div>
            </div>
			-->
        </div>
    </section>

    <section class="feed">
        <div class="container">
            <h2 class="title">отзывы клиентов</h2>
			<div class="feed__item fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="0.8s">
                <img src="img/feed_2.png" alt="Марина Романова" class="feed__img">
                <div class="feed__text">
                    <div class="feed__subtitle">Марина Романова</div>
                    <!--<div class="feed__count">2 полумарафона</div>-->
                    <div class="feed__descr">Заказала себе платье Nike и мужу майку Jordan.
                    <br><br>
                    Качество супер!
                    <br><br>  
                    Зачем переплачивать в магазине, когда Sport Ground предоставляет качественный товар по приятным ценам!!! 
                    </div>
                </div>
            </div>
            <div class="feed__item fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="0.8s">
                <img src="img/feed_1.png" alt="Наталья Андреева" class="feed__img">
                <div class="feed__text">
                    <div class="feed__subtitle">Наталья Андреева</div>
                    <!--<div class="feed__count">2 полумарафона</div>-->
                    <div class="feed__descr">Большой выбор одежды на любой вкус и кошелёк!!!
                    <br><br>
                    Модная одежда на каждый день!
                    <br><br>  
                    Спасибо интернет магазину Sport Ground! 
                    </div>
                </div>
            </div>
			
            <!--<div class="feed__item fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="0.8s">
                <img src="img/feed_2.png" alt="Иван Сёмочкин" class="feed__img">
                <div class="feed__text">
                    <div class="feed__subtitle">Иван Сёмочкин</div>
                    <div class="feed__count">1 полумарафон</div>
                    <div class="feed__descr">Крутая штука-пульсометр. Обычно без них бегал. Оказывается только хуже себе делал. 
                    Купил пульсометр, ещё в подарок получил тренировку. Со мной вместе провели первую тренировку, научили пользоваться новым гаджетом. Также объяснили основы анатомии, составили план тренировок на месяц вперёд.
                    <br><br> 
                    С ними подготовился к своему первому полумарафону! Спасибо!!!
                    </div>
                </div>
            </div>
            <div class="feed__item fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="0.8s">
                <img src="img/feed_3.png" alt="Юлия Дашкина" class="feed__img">
                <div class="feed__text">
                    <div class="feed__subtitle">Юлия Дашкина</div>
                    <div class="feed__count">2 полумарафона</div>
                    <div class="feed__descr">Долго не могла начать бегать, т.к. до этого несколько раз начинала, но становилось тяжело и я бросала. От друзей услышала о RunSmart и о беге с контролем пульса и решила попробовать.
                    <br><br> 
                    Позвонила, ребята поинтересовались моими целями и подобрали очень интересный вариант со скидкой! Теперь бегаю и наслаждаюсь бегом! Пробежала уже 2 полумарафона и несколько более коротких забегов и не намерена останавливаться!
                    <br><br> 
                    Спасибо!!!
                    </div>
                </div>
            </div>-->
			<br>
			<hr>
			<address class="footer__addr">Ип Счастный Артём Сергеевич Юридический адрес: г.Жлобин, ул.Первомайская 25, индекс 247210 Р/С BY42BELB38198184060020226000 в ОАО «Банк БелВЭБ» Бик банка BELBBY2X
			</address>
        </div>
    </section>

    <footer class="footer">
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.0267448501186!2d37.64624047364648!3d55.76831563990905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a636edcd2ad%3A0x4c2ca101e2c8c617!2z0JzRj9GB0L3QuNGG0LrQuNC5INC_0YAt0LQsIDQvMywg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEwNzA3OA!5e0!3m2!1sru!2sua!4v1559894689029!5m2!1sru!2sua" allowfullscreen></iframe>-->

        <div class="footer__info">
            <!--<address class="footer__addr">Ип Счастный Артём Сергеевич <br>
				Юридический адрес: г.Жлобин, ул.Первомайская 25, индекс 247210 <br>
				Р/С BY42BELB38198184060020226000 в ОАО «Банк БелВЭБ» <br>
				Бик банка BELBBY2X
			</address>-->
            <!--<a class="footer__phone" href="tel:80292416531">Заказ одежды<br><br>8 (029) 241-65-31</a>-->
			 <!-- HotLog -->
				<span id="hotlog_counter"></span>
				<span id="hotlog_dyn"></span>
				<script>
				var hot_s = document.createElement('script');
				hot_s.type = 'text/javascript'; hot_s.async = true;
				hot_s.src = 'https://js.hotlog.ru/dcounter/2589682.js';
				hot_d = document.getElementById('hotlog_dyn');
				hot_d.appendChild(hot_s);
				</script>
				<noscript>
				<a href="https://click.hotlog.ru/?2589682" target="_blank"><img
				src="https://hit5.hotlog.ru/cgi-bin/hotlog/count?s=2589682&amp;im=659" 
				alt="HotLog"></a>
				</noscript>
			<!-- /HotLog -->
			<!-- Yandex.Metrika informer -->
				<a href="https://metrika.yandex.ru/stat/?id=65309257&amp;from=informer"
				target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/65309257/3_1_ECECECFF_CCCCCCFF_0_uniques"
				style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="65309257" data-lang="ru" /></a>
				<!-- /Yandex.Metrika informer -->

				<!-- Yandex.Metrika counter -->
				<script>
				   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
				   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
				   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

				   ym(65309257, "init", {
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true,
						trackHash:true
				   });
				</script>
				<noscript><div><img src="https://mc.yandex.ru/watch/65309257" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
				<!-- /Yandex.Metrika counter -->
			<br>
			<address class="footer__phone">© Интернет магазин &laquo;Sport Ground&raquo;,<?php echo date("Y");?>.</address>
            <!--<div class="footer__social">
                <a href="#" class="footer__social-item"><img src="icons/facebook.svg" alt="facebook"></a>
                <a href="#" class="footer__social-item"><img src="icons/instagram.svg" alt="instagram"></a>
                <a href="#" class="footer__social-item"><img src="icons/pinterest.svg" alt="pinterest"></a>
            </div>-->
        </div>
    </footer>

    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Просто заполните форму заявки</div>
            <div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" placeholder="Ваше имя" type="text"> 
                <input name="phone" placeholder="Ваш телефон"> 
                <input name="email" placeholder="Ваш E-mail" type="email"> 

                <button class="button button_submit">заказать консультацию</button>
            </form>
        </div>

        <div class="modal" id="order">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <div class="modal__descr">Пульсометр Polar FT1</div>
            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" required placeholder="Ваше имя" type="text"> 
                <input name="phone" required placeholder="Ваш телефон"> 
                <input name="email" required placeholder="Ваш E-mail" type="email"> 

                <button class="button button_submit">купить</button>
            </form>
        </div>

        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Спасибо за вашу заявку!</div>
            <div class="modal__descr">Наш менеджер свяжется с вами 
                в ближайшее время!</div>
        </div>
    </div>

    <a href="#up" class="pageup">
        <img src="icons/up.svg" alt="up">
    </a>
    

    <script src="https://code.jquery.com/jquery-1.11.0.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
    <script src="js/slick.min.js" defer></script>
    <script src="js/jquery.validate.min.js" defer></script>
    <script src="js/jquery.maskedinput.min.js" defer></script>
    <script src="js/wow.min.js" defer></script>
    <script src="js/script.js" defer></script>
</body>
</html>