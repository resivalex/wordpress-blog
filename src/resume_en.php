<?php
  require_once 'functions.php';
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="/wp-content/uploads/static/styles.css" rel="stylesheet">

<div class="container">
	<div>
		[<a href="/resume-russian">RUS</a>]
	</div>
	
	<div class="header">About me</div>
	
	<p>
		I like writing beautiful and clear code, am interested in new technologies
		I have a good idea of the effectiveness and use of algorithms
		GitHub profile <a href="https://github.com/resivalex">https://github.com/resivalex</a>
	</p>
	
	<div class="header">Lead Ruby on Rails developer</div>
	
	<?php
		output_place(['duration' => '3 years 9 months',
			'period' => 'December 2016 - Present',
			'name' => 'OneRetarget.com',
			'link' => 'https://oneretarget.com',
			'description' => 'A service to manage several ad platforms at one account']);
	?>
	
	<div class="sub-header">Tasks</div>
	<p>
		— Chosing the technical development strategy and tools, suggestion/discussion of implementation ways. Code review<br>
		— Creating tools to analyze and manage ads<br>
		— Synchronization of statistics, state of moderation<br>
		— Implementing of new formats. Error handling<br>
		— Deployment of the system. Backups. System state monitoring
	</p>
	
	<div class="sub-header">Achievements</div>
	<p>
		— Modifying the API in such a way it can be used for external users and the frontend<br>
		— Synchronization and display of advertising performance from Yandex.Metrica data<br>
		— Adding a section for problem detection in the system<br>
		— Implementation of interactive widgets: weekly schedule, bulk copying, ad preview<br>
		— Frontend migration from CoffeeScript and jQuery to ES6 and React<br>
		— Correction of the layout and use of the single style within the entire user account
	</p>
	
	<div class="sub-header">Technologies</div>
	<?php
		output_tags(['Ruby on Rails 5', 'PostgreSQL', 'RSpec', 'Cucumber', 'Capybara', 'Jenkins', 'Docker', 'Capistrano',
			'Trailblazer', 'React.js', 'ES6', 'Redux', 'Flow', 'SASS', 'BEM', 'Webpack', 'yarn', 'styled-components',
			'delayed_job', 'VK API', 'myTarget API', 'Facebook API', 'AdWords API', 'Metrica API', 'Backup']);
	?>
	
	<div class="header">Ruby on Rails developer</div>
	
	<?php
		output_place(['duration' => '8 months',
			'period' => 'April 2016 - October 2016',
			'name' => 'Lakehouse',
			'link' => 'http://www.lakehouse.ru']);
	?>
	
	<div class="sub-header">Tasks</div>
	<p>
		— Real estate project support and development http://o-din.ru/<br>
		— Beauty specialists qualification project support and development http://e-academie.ru/
	</p>
	<div class="sub-header">Technologies</div>
	<?php
		output_tags(['Ruby on Rails 4', 'RSpec', 'Linux', 'Capistrano', 'Capybara', 'AngularJS', 'CoffeeScript', 'PostgreSQL']);
	?>
	
	<div class="header">Самообразование</div>
	
	<?php
		output_place(['duration' => '3 months',
			'period' => 'February 2016 - April 2016']);
	?>
	
	<div class="sub-header">Tasks</div>
	<p>
		— Graduation work rewriting https://github.com/resivalex/student-progress-on-rails<br>
		— Trampoline center website development https://github.com/resivalex/zaskok
	</p>
	<div class="sub-header">Technologies</div>
	<?php
		output_tags(['Ruby on Rails', 'RSpec', 'Linux', 'Capistrano', 'CoffeeScript', 'AngularJS', 'PHP', 'HTML', 'CoffeeScript', 'SASS', 'MySQL', 'D3.js', 'SVG']);
	?>
	
	<div class="header">Software developer</div>
	
	<?php
		output_place(['duration' => '10 months',
			'period' => 'April 2015 - January 2016',
			'name' => 'Nasca Ltd.',
			'link' => 'http://piratetrade.ru',
			'description' => 'Exchange trading company']);
	?>
	
	<div class="sub-header">Tasks</div>
	<p>
		— Website development http://pskovskie.ru/ from scratch<br>
		— Development of a multi-component network application in a team of five members using the Scrum methodology<br>
		— Full implementation of an important component interacting with the exchange<br>
		— Unit-testing with Catch framework<br>
		— Partially designing and implementing a client application on Qt<br>
		— Using design patterns<br>
		— Code review
	</p>
	<div class="sub-header">Technologies</div>
	<?php
		output_tags(['Ruby on Rails 4', 'Ruby Slim', 'JavaScript', 'CSS', 'SASS', 'Bootstrap', 'AJAX', 'friendlyId', 'dragonfly',
			'C++', 'Boost Thread', 'WebSocket', 'JSON', 'Stash', 'JIRA', 'Confluence', 'Git']);
	?>
	
	<div class="header">C++/Qt developer</div>
	
	<?php
		output_place(['duration' => '10 months',
			'period' => 'December 2012 - September 2013',
			'name' => 'Nasca Ltd.',
			'link' => 'http://piratetrade.ru',
			'description' => 'Exchange trading company']);
	?>
	
	<div class="sub-header">Tasks</div>
	<p>
		— Improvements of the trading engine<br>
		— Exchange log parsing and analysis<br>
		— Features implementing for a transaction logging software<br>
		— Development of a program for emulation an exchange<br>
		— Sending email to users of specialized sites<br>
		— Automatic exchange log downloading<br>
		— Using system of version control
	</p>
	<div class="sub-header">Technologies</div>
	<?php
		output_tags(['C++', 'C++ Standard Library', 'Qt', 'JavaScript', 'jQuery', 'HTML', 'SVN']);
	?>
	
	<div class="header">Higher education</div>
	
	<div>
		<span class="glyphicon glyphicon-send"></span>
		Pskov State University<br>
		2008 - 2013<br>
		Faculty of Informatics
	</div>
	
	<div class="header">Languages</div>
	
	<div>
		<span class="glyphicon glyphicon-send"></span>
		Russian — Native<br>
		English — Upper Intermediate
	</div>
	
	<div class="header">Contacts</div>
	
	<div>
		<span class="glyphicon glyphicon-envelope"></span>
		resivalex@gmail.com
	</div>
</div>
