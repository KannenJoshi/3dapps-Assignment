<?php
class Controller {

    public $load;
    public $model;
    
    private $pageURI;

    public function __construct($pageURI = null)
    {
        $this->load = new Load(); 
		$this->model = new Model();

		// Set Page On
		$this->pageURI = $pageURI;
    }

    public function apiGetBrands() {
        return $this->model->getBrands();
        // his code gets data then goes to view page
    }

    public function apiGetModelData() {
        return $this->model->getModelData();
    }
}
?>