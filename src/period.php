<?php
  class Period
  {
    public $from;
    public $to;

    function __construct($from, $to)
    {
      $this->from = $from;
      $this->to = $to;
    }

    function to_russian_string()
    {
      $from_str = (new FormattedMonth($this->from))->to_russian_string();
      if ($this->to === 'present')
        $to_str = 'по настоящее время';
      else
        $to_str = (new FormattedMonth($this->to))->to_russian_string();
      return $from_str.' - '.$to_str;
    }

    function to_english_string()
    {
      $from_str = $this->formatted_month_from()->to_english_string();
      if ($this->to === 'present')
        $to_str = 'Present';
      else
        $to_str = $this->formatted_month_to()->to_english_string();
      return $from_str.' - '.$to_str;
    }

    function to_russian_duration()
    {
      return (new FormattedDuration($this->duration_in_months()))->to_russian_string();
    }

    function to_english_duration()
    {
      return (new FormattedDuration($this->duration_in_months()))->to_english_string();
    }
    
    private function duration_in_months()
    {
      return ($this->formatted_month_to()->year - $this->formatted_month_from()->year) * 12 + 
        ($this->formatted_month_to()->month - $this->formatted_month_from()->month) + 1;
    }
    
    private function formatted_month_from()
    {
      return new FormattedMonth($this->from);
    }
    
    private function formatted_month_to()
    {
      return new FormattedMonth($this->to);
    }
  }

  class FormattedMonth {
    public $year;
    public $month;
    
    const MONTH_CODES = [
      1 => 'january',
      2 => 'february',
      3 => 'march',
      4 => 'april',
      5 => 'may',
      6 => 'june',
      7 => 'july',
      8 => 'august',
      9 => 'september',
      10 => 'november',
      11 => 'october',
      12 => 'december',
    ];

    const EN_MONTHS = [
      'january' => 'January',
      'february' => 'February',
      'march' => 'March',
      'april' => 'April',
      'may' => 'May',
      'june' => 'June',
      'july' => 'July',
      'august' => 'August',
      'september' => 'September',
      'november' => 'November',
      'october' => 'October',
      'december' => 'December',
    ];

    const RUS_MONTHS = [
      'january' => 'Январь',
      'february' => 'Февраль',
      'march' => 'Март',
      'april' => 'Апрель',
      'may' => 'Май',
      'june' => 'Июнь',
      'july' => 'Июль',
      'august' => 'Август',
      'september' => 'Сентябрь',
      'november' => 'Ноябрь',
      'october' => 'Октябрь',
      'december' => 'Декабрь',
    ];

    function __construct($str)
    {
      if ($str === 'present')
      {
        $this->year = (int)date('Y');
        $this->month = (int)date('m');
      }
      else
      {
        $parts = preg_split('/\./', $str);
        $this->year = (int)$parts[0];
        $this->month = (int)$parts[1];
      }
    }

    function to_russian_string()
    {
      return $this->year.' '.$this::RUS_MONTHS[$this::MONTH_CODES[$this->month]];
    }

    function to_english_string()
    {
      return $this->year.' '.$this::EN_MONTHS[$this::MONTH_CODES[$this->month]];
    }
  }
  
  class FormattedDuration
  {
    public $months;

    const RUS_TRANSLATIONS = [
      'year' => [
        'one' => 'год',
        'few' => 'года',
        'many' => 'лет'
      ],
      'month' => [
        'one' => 'месяц',
        'few' => 'месяца',
        'many' => 'месяцев'
      ]
    ];

    const EN_TRANSLATIONS = [
      'year' => [
        'one' => 'year',
        'many' => 'years'
      ],
      'month' => [
        'one' => 'month',
        'many' => 'months'
      ]
    ];
    
    function __construct($months)
    {
      $this->months = $months;
    }

    function to_russian_string()
    {
      $months = $this->months % 12;
      $years = ($this->months - $months) / 12;
      $parts = [];
      if ($years > 0)
        $parts[] = $years.' '.$this->rus_year($years);
      if ($months > 0)
        $parts[] = $months.' '.$this->rus_month($months);
      
      return join(' ', $parts);
    }

    function to_english_string()
    {
      $months = $this->months % 12;
      $years = ($this->months - $months) / 12;
      $parts = [];
      if ($years > 0)
        $parts[] = $years.' '.$this->en_year($years);
      if ($months > 0)
        $parts[] = $months.' '.$this->en_month($months);

      return join(' ', $parts);
    }

    function rus_month($num)
    {
      return $this::RUS_TRANSLATIONS['month'][$this->rus_count_category($num)];
    }

    function en_month($num)
    {
      return $this::EN_TRANSLATIONS['month'][$this->en_count_category($num)];
    }

    function rus_year($num)
    {
      return $this::RUS_TRANSLATIONS['year'][$this->rus_count_category($num)];
    }

    function en_year($num)
    {
      return $this::EN_TRANSLATIONS['year'][$this->en_count_category($num)];
    }

    function rus_count_category($num)
    {
      $num = abs($num);
      if ($num % 100 > 10 && $num % 100 < 20)
        return 'many';
      if ($num % 10 === 1)
        return 'one';
      if (in_array($num % 10, [2, 3, 4]))
        return 'few';
      
      return 'many';
    }

    function en_count_category($num)
    {
      if ($num === -1 || $num === 1)
        return 'one';
      else
        return 'many';
    }
  }