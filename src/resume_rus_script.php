<?php
  require_once 'functions.php';
  require_once 'tags.php';
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="/wp-content/uploads/static/styles.css" rel="stylesheet">

<div class="container" itemscope itemtype="http://schema.org/Person">
	<div>
		[<a href="/resume-english">Switch to English</a>]
	</div>
	
	<div class="main-header" itemprop="name">Решетников Иван Александрович</div>
	
	<p itemprop="description">
		Люблю писать красивый и понятный код. Интересуюсь новыми технологиями.<br>
		Имею хорошее представление об эффективности алгоритмов.<br>
		GitHub профиль <?= black_link('https://github.com/resivalex</a>') ?>
	</p>

	<div class="header" itemprop="jobTitle">Machine Learning инженер</div>

  <?php
		output_place(['month_period' => '2020.11-present',
			'locale' => 'ru',
			'name' => 'Sape',
			'link' => 'https://sape.ru',
			'description' => 'Инструменты для рекламы и заработка в интернете']);
  ?>

	<div class="sub-header">Задачи</div>
	<p>
		— Разработка модели рекомендации цен на основе исторических данных<br>
		— Поиск значимых факторов, влияющих на отказ пользователей от услуги<br>
		— Помощь SEO-специалистам в выборе стратегии продвижения
	</p>

	<div class="sub-header">Достижения</div>
	<p>
		— Разработка модели рекомендации цен от анализа данных до подготовки к деплою
	</p>

	<div class="sub-header">Технологии</div>
  <?php
  	output_tags(sape_tags());
  ?>
	
	<div class="header" itemprop="jobTitle">Ведущий Ruby on Rails разработчик</div>
	
	<?php
		output_place(['month_period' => '2016.12-2020.11',
			'locale' => 'ru',
			'name' => 'OneRetarget.com',
			'link' => 'https://oneretarget.com',
			'description' => 'Сервис для управления рекламой из одного кабинета']);
	?>

	<div class="sub-header">Задачи</div>
	<p>
		— Выбор направлени и инструментов для разрития технической части проекта, предложение/обсуждение вариантов реализации, ревью кода<br>
		— Создание инструментов для анализа и управления рекламой<br>
		— Синхронизация статистики, статусов модерации<br>
		— Реализация новых форматов. Обработка ошибок<br>
		— Деплой системы. Резервное копирование. Мониторинг ошибок
	</p>
	
	<div class="sub-header">Достижения</div>
	<p>
		— Унификация API для использования на фронтенде и внешними пользователями<br>
		— Синхронизация и вывод показателей эффективности рекламы из Яндекс.Метрики<br>
		— Добавление раздела админки для обнаружения проблемных ситуаций<br>
		— Реализация интерактивных виджетов: недельное расписание показов, массовое копирование, превью баннеров<br>
		— Миграция фронтенда с CoffeeScript и jQuery на ES6 и React<br>
		— Приведение стилей в кабинете пользователя к аккуратному единообразному виду
	</p>
	
	<div class="sub-header">Технологии</div>
	<?php
		output_tags(oneretarget_tags());
	?>
	
	<div class="header">Ruby on Rails разработчик</div>
	
	<?php
		output_place(['month_period' => '2016.04-2016.11',
			'locale' => 'ru',
			'name' => 'Lakehouse',
			'link' => 'http://www.lakehouse.ru']);
	?>
	
	<div class="sub-header">Задачи</div>
	<p>
		— Поддержка и разработка сайта для оперативного управления обслуживающими процессами в крупных зданиях, сдающих помещения в аренду <?= black_link('http://o-din.ru/') ?><br>
		— Поддержка и разработка CRM для повышения квалификации стилистов <?= black_link('http://e-academie.ru/') ?>
	</p>
	<div class="sub-header">Технологии</div>
	<?php
		output_tags(lakehouse_tags());
	?>
	
	<div class="header">Самообразование</div>
	
	<?php
    output_place(['month_period' => '2016.02-2016.04', 'locale' => 'ru']);
	?>
	
	<div class="sub-header">Задачи</div>
	<p>
		— Переписывание дипломного проекта <?= black_link('https://github.com/resivalex/student-progress-on-rails') ?><br>
		— Разработка веб-сайта для батутного центра <?= black_link('https://github.com/resivalex/zaskok') ?>
	</p>
	<div class="sub-header">Технологии</div>
	<?php
		output_tags(selfeducation_tags());
	?>
	
	<div class="header">Разработчик ПО</div>
	
	<?php
		output_place(['month_period' => '2015.04-2016.01',
			'locale' => 'ru',
			'name' => 'Nasca Ltd.',
			'link' => 'http://piratetrade.ru',
			'description' => 'Торговля на бирже']);
	?>
	
	<div class="sub-header">Задачи</div>
	<p>
		— Разработка веб-сайта <?= black_link('http://pskovskie.ru/') ?> с нуля<br>
		— Разработка многокомпонентного сетевого приложения в команде из пяти разработчиков по методологии Scrum<br>
		— Полная реализация важного компонента, взаимодействующего непосредственно с биржей<br>
		— Юнит-тестирование с использованием Catch фреймворка<br>
		— Частичное проектирование и реализация клиентского приложения на Qt<br>
		— Использование шаблонов проектирования<br>
		— Ревью кода
	</p>
	<div class="sub-header">Технологии</div>
	<?php
		output_tags(piratetrade_2_tags());
	?>
	
	<div class="header">C++/Qt разработчик</div>
	
	<?php
		output_place(['month_period' => '2012.12-2013.09',
			'locale' => 'ru',
			'name' => 'Nasca Ltd.',
			'link' => 'http://piratetrade.ru',
			'description' => 'Торговля на бирже']);
	?>
	
	<div class="sub-header">Задачи</div>
	<p>
		— Улучшение торгового движка<br>
		— Парсинг и анализ биржевого лога<br>
		— Доработки для электронного журнала сделок<br>
		— Разработка программы для эмуляции биржи<br>
		— Рассылка электронных писем пользователям определённых сайтов<br>
		— Автозагрузка логов биржи<br>
		— Использование системы контроля версий
	</p>
	<div class="sub-header">Технологии</div>
	<?php
		output_tags(piratetrade_tags());
	?>
	
	<div class="header">Высшее образование</div>

	<div class="row-with-icon">
		<div class="row-with-icon__icon"><span class="symbol-icon glyphicon glyphicon-send"></span></div>
		<div class="row-with-icon__info">
			<div>Псковский государственный университет</div>
			<div>2008 - 2013</div>
			<div>Факультет информатики</div>
		</div>
	</div>
	
	<div class="header">Знание языков</div>

	<div class="row-with-icon">
		<div class="row-with-icon__icon"><span class="symbol-icon glyphicon glyphicon-send"></span></div>
		<div class="row-with-icon__info">
			<div itemprop="nationality">Русский — Родной</div>
			<div>Английский — Upper Intermediate</div>
		</div>
	</div>
	
	<div class="header">Контакты</div>

	<div class="row-with-icon">
		<div class="row-with-icon__icon"><span class="symbol-icon glyphicon glyphicon-envelope"></span></div>
		<div class="row-with-icon__info">
			<div itemprop="email">resivalex@gmail.com</div>
		</div>
	</div>
</div>
