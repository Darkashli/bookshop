<?php 

   class Books extends CI_Controller {

	public function __construct(){ 
         parent::__construct(); 
         $this->load->model('book_model');
    } 
    
	 public function index() {

	 	$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));

		$this->load->view('books/index', array(
		'title' => 'Bookstore',
		'book' => $this->book_model->get_book()
		));
		$this->load->view('templates/footer');
	}

   public function view($slug = NULL){

		$books= $this->book_model->get_book($slug);
		if (empty($books)) {
		    show_404();
		}
		// Load navigation
		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));
		// end navigation
		$this->load->view('books/view', array(
			'book' => $books 
		));
		$this->load->view('templates/footer');
	}

	public function create(){

		$this->form_validation->set_rules('author', 'Author', 'required');
	    $this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');
		$this->form_validation->set_rules('describe', 'Description', 'required');
		
        if ($this->form_validation->run() === FALSE) {
 
			// Load navigation
			$this->load->model('navModel');
			$data = $this->navModel->getNav();
			$this->load->view('templates/header', array(
				'navData' => $data 
			));
			// end navigation
			$this->load->view('books/create', array(
				'title' => 'Create book',
			));
			$this->load->view('templates/footer');

       } else {
	       	$this->book_model->create_book();
	       	redirect('books');
       }
	}

	public function delete($id){
		$this->book_model->delete_book($id);
		redirect('books');
	}

	public function edit($slug){

		$books = $this->book_model->get_book($slug);
		if (empty($books)) 
		{
		    show_404();
		}
		// Load navigation
		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));
		// end navigation
		$this->load->view('books/edit', array(
		    'title' => 'Edit book',
	    	'book' => $books			
		));

		$this->load->view('templates/footer');
	}

	public function update(){
		$this->book_model->update_book();
		redirect('books');
	}
}