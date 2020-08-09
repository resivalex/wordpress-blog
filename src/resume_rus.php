<?php
function output_tags($tags) {
  foreach ($tags as $tag) {
    echo '<div class="tag">'.$tag.'</div>';
  }
}

function output_place($params)
{
  if (isset($params['duration']) || isset($params['period']))
  {
    echo '<div>
			<span class="glyphicon glyphicon-time"></span>
			'.$params['duration'].'<br>
			'.$params['period'].'
		</div>';
  }
  if (isset($params['name']) || isset($params['link']) || isset($params['description']))
  {
    echo '<div>
			<span class="glyphicon glyphicon-map-marker"></span>
			'.$params['name'].'<br>
			'.$params['link'].'<br>
			'.$params['description'].'
		</div>';
  }
}
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="/wp-content/uploads/static/styles.css" rel="stylesheet">

<div class="header">Обо мне</div>

<p>
	Люблю писать красивый и понятный код. Интересуюсь новыми технологиями.<br>
	Имею хорошее представление об эффективности алгоритмов.<br>
	GitHub профиль <a href="https://github.com/resivalex">https://github.com/resivalex</a>
</p>

<div class="header">Ведущий Ruby on Rails разработчик</div>

<?php
	output_place(['duration' => '3 года 9 месяцев',
		'period' => 'Декабрь 2016 - по настоящее время',
		'name' => 'OneRetarget.com',
		'link' => 'https://oneretarget.com',
		'description' => 'Сервис для управления рекламой из одного кабинета']);
?>

<div class="sub-header">Задачи</div>
<p>
— Выбор направления и инструментов для разрития технической части проекта, предложение/обсуждение вариантов реализации, ревью кода<br>
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

Технологии
<div class="sub-header">Технологии</div>
<?php
	output_tags(['Ruby on Rails 5', 'PostgreSQL', 'RSpec', 'Cucumber', 'Capybara', 'Jenkins', 'Docker', 'Capistrano',
		'Trailblazer', 'React.js', 'ES6', 'Redux', 'Flow', 'SASS', 'BEM', 'Webpack', 'yarn', 'styled-components',
		'delayed_job', 'VK API', 'myTarget API', 'Facebook API', 'AdWords API', 'Metrica API', 'Backup']);
?>

<div class="header">Ruby on Rails разработчик</div>

<?php
output_place(['duration' => '8 месяцев',
	'period' => 'Апрель 2016 - Октябрь 2016',
	'name' => 'Lakehouse',
	'link' => 'http://www.lakehouse.ru']);
?>

<div class="sub-header">Задачи</div>
<p>
— Поддержка и разработка сайта для оперативного управления обслуживающими процессами в крупных зданиях, сдающих помещения в аренду http://o-din.ru/<br>
— Поддержка и разработка CRM для повышения квалификации стилистов http://e-academie.ru/
</p>
<div class="sub-header">Технологии</div>
<?php
	output_tags(['Ruby on Rails 4', 'RSpec', 'Linux', 'Capistrano', 'Capybara', 'AngularJS', 'CoffeeScript', 'PostgreSQL']); 
?>

<div class="header">Самообразование</div>

<?php
output_place(['duration' => '3 месяца',
  'period' => 'Февраль 2016 - Апрель 2016']);
?>

<div class="sub-header">Задачи</div>
<p>
	— Переписывание дипломного проекта https://github.com/resivalex/student-progress-on-rails
	— Разработка веб-сайта для батутного центра https://github.com/resivalex/zaskok
</p>
<div class="sub-header">Технологии</div>
<?php
output_tags(['Ruby on Rails', 'RSpec', 'Linux', 'Capistrano', 'CoffeeScript', 'AngularJS', 'PHP', 'HTML', 'CoffeeScript', 'SASS', 'MySQL', 'D3.js', 'SVG']);
?>


















