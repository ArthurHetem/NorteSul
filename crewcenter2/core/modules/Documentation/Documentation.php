<?php
class Documentation extends CodonModule
{

	public function index()
	{
	$this->render('documentation/documentation_index.php');
	}
	
	public function hb()
	{
	$this->render('documentation/hb.php');	
	}	
}	
?>