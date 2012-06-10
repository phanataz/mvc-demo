<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['band']))
		{
            // band listing
			$bands = $this->model->getBandList();
            asort($bands);
			include 'view/bands.php';
		}
		else
		{
			// detailed band info
			$band = $this->model->getBand($_GET['band']);
			include 'view/viewbands.php';
		}
	}
}

?>