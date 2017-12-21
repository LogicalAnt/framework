<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class ZonesController
 */
class ZonesController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Admin/index');
	}

	public function showAllZones()
	{
		$data['zones']=$this->db->query("select * from zones")->result(); 
		//die(json_encode($data));
		$this->load->view('Admin/showAllZones', $data);
	}

	public function createZone()
	{
		/**
		 * [$par parent zone to be checked]
		 * @var [integer]
		 */
		$par = isset($_GET['parent'])?(is_numeric($_GET['parent'])?$_GET['parent']:1):1;
		$data=$this->db->query("select * from zones")->result();
		$a['name']="";
		foreach ($data as $parent){
			$chk=($parent->id==$par)?"selected":"";
			$a['name'].="<option {$chk}>".$parent->name .'</option>';
		}
		echo $a['name'];
		$this->load->view('Admin/createZone', $a);
	}
	
	/**
	 * [modalData description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function modalData($id)
	{ 
		/** @var [zones object] [return zones to ajax request] */
		$data=$this->db->query("select * from zones where id={$id}")->result();
		echo json_encode($data);
	}

	

}
