<?php
class View
{
	public $tempalte;
	public $View;
	public function __construct()
	{
		$this->tempalte = $GLOBALS['controler'];
		$this->View = $GLOBALS['action'];
	}

	public function existView()
	{
		return file_exists(str_replace("core", "", __DIR__)."Views/" . $this->tempalte . "/" . $this->View . ".php");
	}

	public function render($params = [])
	{
		if($this->existView())
		{
			extract($params);
			require_once str_replace("core", "", __DIR__)."Views/" . $this->tempalte . "/" . $this->View . ".php";
		}
		else
		{
			echo "такого представления нет";
		}
	}

}
?>