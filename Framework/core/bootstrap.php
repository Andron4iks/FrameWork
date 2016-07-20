<?php 

/**
* 
*/
class HowdyEngine
{
	protected
		$settings;
	public function __construct($settings)
	{
		$this->settings = $settings;
		$this->uri = urldecode(preg_replace('/\?.*/iu', '', $_SERVER['REQUEST_URI']));
	}

	public function process_path()
	{
		# code...
	}
}



 ?>