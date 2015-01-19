<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class regiment_model extends CI_Model
{
    public function create($subcategory,$name,$order)
    {
        $data=array("subcategory" => $subcategory,"name" => $name,"order" => $order);
        $query=$this->db->insert( "martyr_regiment", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("martyr_regiment")->row();
        return $query;
    }
    function getsingleregiment($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("martyr_regiment")->row();
        return $query;
    }
    public function edit($id,$subcategory,$name,$order)
    {
        $data=array("subcategory" => $subcategory,"name" => $name,"order" => $order);
        $this->db->where( "id", $id );
        $query=$this->db->update( "martyr_regiment", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `martyr_regiment` WHERE `id`='$id'");
        return $query;
    }
    
    public function getregimentdropdown()
	{
		$query=$this->db->query("SELECT * FROM `martyr_regiment`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
}
?>
