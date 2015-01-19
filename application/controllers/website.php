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
        $data["table"]=$this->regiment_model->getregimentbycategory($categoryid);
		$data["page"]="regiments";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    
    public function lightalamp()
	{
        $id=$this->input->get("id");
        $data['id']=$this->input->get('id');
		$data["page"]="light";
        $data["row"]=$this->martyr_model->getmartyrbyid($id);
        $this->regiment_model->addlight($id);
        $this->load->view("frontend",$data);
	}
    
    public function sendmessage()
	{
        $id=$this->input->get("id");
        $data['id']=$this->input->get('id');
		$data["page"]="sendmessage";
//        $data["row"]=$this->martyr_model->sendamessage($id);
//        $this->regiment_model->addlight($id);
        $this->load->view("frontend",$data);
	}
    public function sendmessagesubmit()
	{
        $id=$this->input->post("id");
        $name=$this->input->post("name");
        $contact=$this->input->post("contact");
        $city=$this->input->post("city");
        $email=$this->input->post("email");
        $message=$this->input->post("message");
        $this->message_model->addmessage($id,$name,$contact,$city,$email,$message);
		$data["page"]="home";
//        $data["row"]=$this->martyr_model->sendamessage($id);
//        $this->regiment_model->addlight($id);
        $this->load->view("frontend",$data);
	}
    
        
}
?>