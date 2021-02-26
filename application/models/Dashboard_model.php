<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function getCants(){

        $product=$this->db->get("product")->num_rows();
        $sale=$this->db->get("sale")->num_rows();
        $client=$this->db->get("client")->num_rows();
        $user=$this->db->get("user")->num_rows();

		return (object) array(
            "cant_roduct"=>$product,
            "cant_sale"=>$sale,
            "cant_client"=>$client,
            "cant_user"=>$user
        );
    }


    public function getYears(){
		$this->db->select("YEAR(s.date) as year");
		$this->db->from("sale s");
		$this->db->group_by("year");
		$this->db->order_by("year","desc");
		$results = $this->db->get();
		return $results->result();
    }

}