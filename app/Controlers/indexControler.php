<?php
require_once "app/core/Controler.php";
class indexControler extends Controler
{
	public function indexAction()
	{
		echo "я главный контролер, событие index<br>";
		$this->viewObj->render();
	}

	public function testAction()
	{
		echo "я главный контролер, событие test<br>";
		$this->viewObj->render();
	}
}