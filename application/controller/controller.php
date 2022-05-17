<?php
class Controller {

    public $load;
    public $model;

    public function __construct($pageURI = null)
    {
        $this->load = new Load(); 
		$this->model = new Model();

		// Set Page On
		$this->$pageURI();
    }

    public function apiGetBrands() {
        return $this->model->getBrands();

    }

    public function apiGetModelData() {
        return $this->model->getModelData();
    }
}
?>