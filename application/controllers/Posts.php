<?php
    class Posts extends CI_Controller{
        public function index(){

            $data['title'] = 'Latest Posts';
            $data['posts'] = $this->post_model->get_posts();
           
            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');                       
        }
    /**
    * Get Post Page Data from this method.
    *
    * @return Response
    */

        public function view($slug = NULL){
            $data['post'] = $this->post_model->get_posts($slug);

            If(empty($data['post'])){
                show_404();
            }
            
            $data['title'] = $data['post']['title'];

            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');     

        }

        public function create(){
            $data['title'] = 'Create a Blog post';
        
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('post_description', 'Description', 'required');
            $this->form_validation->set_rules('posted_by', 'Posted By', 'required');

            if ($this->form_validation->run() === FALSE){              
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->post_model->create_post();
                redirect('posts');
            }
        }
    }

    