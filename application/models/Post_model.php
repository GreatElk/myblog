<?php

    class Post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
        public function get_posts($slug = FALSE){
            if ($slug === FALSE){
                $query = $this->db->get('posts');
                return $query->result_array();               
            } 

            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();               
        }
   /**
    * Insert Data from this method.
    *
    * @return Response
   */
        public function create_post(){       
            $slug = url_title($this->input->post('title'));

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'post_description' => $this->input->post('post_description'),
                'posted_by' => $this->input->post('posted_by')                          
            );

            return $this->db->insert('posts', $data);
        }
    }