<?php
require_once "app/core/View.php";
class Controler
{
	public $viewObj;
	public $Template;
	public $Views;
	public function __construct()
	{
		$this->Template = $GLOBALS['controler'];
		$this->View = $GLOBALS['action'];
		$this->viewObj = new View();
	}
}