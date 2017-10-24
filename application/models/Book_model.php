<?php 
   Class Book_model extends CI_Model { 
	
      public function __construct() {  
         $this->load->database();
      } 

      public function get_book($slug = FALSE){
         if ($slug === FALSE) {
             //ASC (older to newer posts)
           $this->db->order_by('id', 'DESC');
           $query = $this->db->get('book');
         return $query->result_array();
            
         }
          $query = $this->db->get_where('book', array('slug' => $slug));
         return $query->row_array();

      }

      public function create_book(){
        $slug = url_title($this->input->post('title'));

        $data = array(
          'author' => $this->input->post('author'),
          'title' => $this->input->post('title'),
          'slug' => $slug,
          'year' => $this->input->post('year'),
          'describe' => $this->input->post('describe'),
          'genre' => $this->input->post('genre')
        );

        return $this->db->insert('book', $data);
      }

      public function update_book(){
      
        $slug = url_title($this->input->post('title'));

        $data = array(
          'author' => $this->input->post('author'),
          'title' => $this->input->post('title'),
          'slug' => $slug,
          'year' => $this->input->post('year'),
          'describe' => $this->input->post('describe'),
          'genre' => $this->input->post('genre')
        );

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('book', $data);
      }

      public function delete_book($id){
        $this->db->where('id', $id);
        $this->db->delete('book');
        return true;
     }


      public function get_categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
   } 

