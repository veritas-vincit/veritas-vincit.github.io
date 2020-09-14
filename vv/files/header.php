<?php 

class SiteManager
{	
	public $lang='en';
	public $texts = array();
	function  ChangeLang(){
        if(isset($_COOKIE["lang"])) {
            $this->lang = $_COOKIE["lang"];
        }
	}
	function LoadSettings()
	{
		$this->ChangeLang();

		if(file_exists("../files/texts_".$this->lang.".php"))
		{
			$this->texts = parse_ini_file("../files/texts_".$this->lang.".php",true);
		}
		else
		if(file_exists("../files/texts_".$this->lang.".php"))
		{
			$this->texts = parse_ini_file("../files/texts_".$this->lang.".php",true);
		}
		else
		{
			die("The language file texts_".$this->lang.".php doesn't exist!");
		}
	}
}

$website = new SiteManager();
$website->LoadSettings();

?>