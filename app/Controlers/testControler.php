<?php
require_once "app/core/Controler.php";
class testControler extends Controler
{
	public function indexAction()
	{
		echo "я контролер test, событие index<br>";
		$this->viewObj->render();
	}
	public function testAction()
	{
		echo "я контролер test, событие test<br>";
		$this->viewObj->render();
	}
}