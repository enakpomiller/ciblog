<?php

class Pages extends CI_controller{

	 public function view($page='home'){ // home is a default page
	 	if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){ // this line looks out for pages inside the view folder

	 		show_404();
	 	}
          $data['title'] = ucfirst($page);// capitalize first letter of the title 

          // loading our pages such as header and footer
          $this->load->view('templates/header');
          $this->load->view('pages/'.$page,$data);
          $this->load->view('templates/footer');
	 }
}

?>