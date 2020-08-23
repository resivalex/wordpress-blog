<?php
  try
  {
    require_once 'resume_rus_script.php';
  }
  catch (Throwable $e)
  {
    echo '<pre>'.$e->getMessage().'</pre>';
  }
