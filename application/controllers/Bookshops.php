<?php 
   class bookshops extends CI_Controller {
	
	 public function view($page = 'home') {
		if (!file_exists(APPPATH. 'views/bookshops/' .$page. '.php')) {
			show_404();
		}

		// Load navigation
		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));
		// end navigation

		$this->load->view('bookshops/'.$page, array(
			'title' => ucfirst($page)
		));
		$this->load->view('templates/footer');
	}
}
