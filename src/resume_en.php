<?php
	try
  {
    require_once 'resume_en_script.php';
  }
  catch (Throwable $e)
	{
		echo '<pre>'.$e->getMessage().'</pre>';
	}
