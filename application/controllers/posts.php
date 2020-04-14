<?php

class Posts extends CI_controller{

	 public function index(){

	 	 $data['title'] = 'latest posts ';

      $data['posts']= $this->post_model->get_posts();
          // print to dee if its getting the data from database
              //print_r($data['posts']);

     $this->load->view('templates/header',$data);
	 	 $this->load->view('posts/index',$data);
	 	 $this->load->view('templates/footer');
	 }

	  // creating our view method
	     public function view($slug = NULL){
	   	 $data['post']= $this->post_model->get_posts($slug);
	   	  // check if the post is empty
	   	   if(empty($data['post'])){
	   	   	 show_404();
	   	   }
	   	     // set the post title
	   	    $data['title'] = $data['post']['title'];
	   	    $this->load->view('templates/header');
	   	    $this->load->view('posts/view',$data);
	   	    $this->load->view('templates/footer');
	   }


	   public function create(){
            $data['title'] = 'create post';

            // fetching from database for our cartegory
          $data['cartegories'] = $this->post_model->get_cartegories();


          // create rules for form validation to check empty fields
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('body','Body','required');
          // check if the form is being validated
            // if it doesn't execute, perform the bellow action
             if($this->form_validation->run()==FALSE){

             $this->load->view('templates/header');
             $this->load->view('posts/create',$data);
             $this->load->view('templates/footer');
           
             }
             //if it does execute, perform the bellow action
             else {
             	    
                  //$this->post_model->create_post();
             	// sucess message
             	//$this->load->view('posts/success');
                 //redirect('posts');

              // image upload
                
              $config['upload_path'] = './assets/images/posts';
              $config['allowed_types'] = 'gif|jpg|png';
              $config['max_size'] = '2048';
              $config['max_width'] = '500';
              $config['max_height'] = '500';

                $this->load->library('upload',$config);
                 if(!$this->upload->do_upload()){
                   $errors = array('error'=>$this->upload->display_errors());
                    $post_image = 'noimage.jpg';

                   }
                  else {
                   $data = array('upload_data'=>$this->upload->data());
                   $post_image = $_FILES['userfile']['name'];

                   }
                   
                  $this->post_model->create_post($post_image);
                   redirect('posts');
                    
              // end of upload image

             }

	   }

         public function delete($id){
            //echo $id;
          $this->post_model->delete_post($id);
          redirect('posts');
           
             }


         public function edit($slug){

         $data['post']= $this->post_model->get_posts($slug);

           //$data['cartegories'] = $this->post_model->get_cartegories();
        // check if the post is empty
         if(empty($data['post'])){
           show_404();
                }
           // set the post title
          else {
           # code...

          $data['title'] =  'edit post';
          $this->load->view('templates/header');
          $this->load->view('posts/edit',$data);
          $this->load->view('templates/footer');

          }
        

         }
       
        public function update(){
      
          $this->post_model->update_post();
            
          redirect('posts');
              
             
            
               
        
        }

}



?> 