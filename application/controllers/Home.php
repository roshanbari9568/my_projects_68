<?php

class Home extends CI_Controller // in controller class name remain Capital

{


    public function index()
    {

        // echo "This is the home controller";
        $this->load->view('home_view');

    }

}




?>