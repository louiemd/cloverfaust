<?php
class Admin extends Controller {
	function Admin(){
		parent::Controller();
		$this->load->model("admin_m","m");
	}
	function index(){
		redirect("admin/home");
	}
	function home(){
		$this->m->yield("home");
	}
	function forums(){
		$this->m->yield("forums");
	}
	function users(){
		$this->m->yield("users");
	}
	function create(){
		if(empty($_POST)){
			$this->m->yield("create");
		}
		else{
			$this->m->create();
		}
	}
	function delete(){
		if(empty($_POST)){
			$this->m->yield("delete");
		}
		else{
			$this->m->delete();
		}
	}
	function edit(){
		if(empty($_POST)){
			$this->m->yield("edit");
		}
		else{
			$this->m->edit();
		}
	}
	function options(){
		if(empty($_POST)){
			$this->m->yield("options");
		}
		else{
			$this->m->options();
		}
	}
}
?>