<?php

 class Post_model extends CI_Model{

 	 public  function __construct(){

 	 	// loading our database
 	 	$this->load->database();
 	 }
 	 // creating get post method
 	  public function get_posts($slug = FALSE){

 	  	  // display the last inserted to the top of the page
 	  	   $this->db->order_by('posts.id','DESC'); // last to the top // post.id identifies with the joining of tables bcos both posts and cartegories have unique id
 	    // joining the cartegory table and the post table
 	  	     //$this->db->join('cartegories','cartegories.id = posts.category_id');

 	  	 if($slug == FALSE){

           $query = $this->db->get('posts');
             return $query->result_array();

 	  	 }

 	  	  // passing values to slug

 	  	  $query =$this->db->get_where('posts',array('slug'=>$slug)) ;
 	  	  return $query->row_array();

 	  	   }

 	  	  public function create_post($post_image){

 	  	  	// getting form values 
 	  	  	$slug = url_title($this->input->post('title'));
 	  	  	// passing value into an array
 	  	  	 $data = array(
              'title'=>$this->input->post('title'),
              'slug'=>$slug,
              'body'=> $this->input->post('body'),
              // inserting values for cartegory in an array format
            'category_id' => $this->input->post('category_id'),
            'post_image' => $post_image
              
 	  	  	 );
 	  	  	 // inserting values int the database
 	  	  	 return $this->db->insert('posts',$data);
           // inserting vaues for cartegory in an array format

 	  	      }
      // delete from the post table in datABASE
 	  	  public function delete_post($id){
 	  	  	$this->db->where('id',$id);
 	  	  	$this->db->delete('posts');
 	  	  	 return true; // if it is correct

 	  	  }


 	  	   public function update_post(){

 	  	   $slug = url_title($this->input->post('title'));
 	  	        $data = array(
               'title'=> $this->input->post('title'),
               'slug' => $slug,
               'body' => $this->input->post('body'),
              'category_id' => $this->input->post('category_id')
 	  	       );

 	  	        //linking to database table
 	  	     $this->db->where('id',$this->input->post('id'));
 	  	       //update when executed
 	  	     return $this->db->update('posts',$data);

 	  	   }
 
 	  	    public function get_cartegories(){

 	  	    	 $this->db->order_by('name'); // field name 
 	  	    	 $query = $this->db->get('cartegories'); // table name

 	  	    	 return $query->result_array();
 	  	    }

 	  }

    

?>