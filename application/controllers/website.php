<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Website extends CI_Controller
{
	public function index( )
	{
		$data["page"]="home";
        $data["category"]=$this->category_model->getcategorytree(0);
        print_r($data["category"]);
        $this->load->view("frontend",$data);
	}
    public function martry( )
	{
		$data["page"]="martry";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    public function detail( )
	{
        $id=$this->input->get("id");
        $data["row"]=$this->martyr_model->getmartyrbyid($id);
		$data["page"]="details";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    
    public function regiments( )
	{
        $categoryid=$this->input->get("category");
        $data["row"]=$this->regiment_model->getregimentbycategory($categoryid);
		$data["page"]="details";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    
        
}
?>