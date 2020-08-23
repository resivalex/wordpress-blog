<?php
  require_once 'period.php';

  function output_tags($tags) {
    foreach ($tags as $tag)
    {
      echo '<div class="tag">'.$tag.'</div>';
    }
  }

  function output_place($params)
  {
    if (isset($params['month_period']))
    {
      $months = preg_split('/-/', $params['month_period']);
      $period = new Period($months[0], $months[1]);
      if (isset($params['locale']) && $params['locale'] === 'ru')
      {
        $params['duration'] = $period->to_russian_duration();
        $params['period'] = $period->to_russian_string();
      }
      else
      {
        $params['duration'] = $period->to_english_duration();
        $params['period'] = $period->to_english_string();
      }
    }
    if (isset($params['rus_month_period']))
    {
      $months = preg_split('/-/', $params['rus_month_period']);
      $period = new Period($months[0], $months[1]);
      $params['duration'] = $period->to_english_duration();
      $params['period'] = $period->to_english_string();
    }
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
        <span class="glyphicon glyphicon-map-marker"></span>'
        .$params['name'].'<br>'
        .(isset($params['link']) ? black_link($params['link']).'<br>' : '')
        .$params['description']
        .'</div>';
    }
  }

  function black_link($url)
  {
    return '<a target="_blank" class="black-link" href="'.$url.'">'.$url.'</a>';
  }
