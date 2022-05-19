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

        $this->$pageURI();
    }

    public function apiGetBrands() {
        return $this->model->getBrands();
        // his code gets data then goes to view page
    }

    public function apiGetModelData() {
        return $this->model->getModelData();
    }

    public function apiGetDisplayCards() {
        return $this->model->getDisplayCards();
    }

    public function home() {
        $this->load->view('view_home', ['data' => $this->model->getDisplayCards()]);
    }

    public function about() {
        $this->load->view('view_about');
    }

    public function can() {
        $this->load->view('view_model_can');
    }

    public function bottle() {
        $this->load->view('view_model_bottle');
    }

    public function cup() {
        $this->load->view('view_model_cup');
    }

    public function contacts() {
        $this->load->view('view_contacts');
    }
}
?>