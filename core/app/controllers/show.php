<?php
class Show extends Controller {
	function Show(){
		parent::Controller();
		//$this->output->enable_profiler(true);
	}
	function index(){
		redirect("show/home");
	}
	function home(){
		$this->common->yield("home");
	}
	function forums(){
		$this->common->yield("forums");
	}
	function forum(){
		$this->common->yield("forum");
	}
	function topic(){
		$this->common->yield("topic");
	}
	function account(){
		$this->common->yield("account","user");
	}
	function options(){
		$this->common->yield("options","user");
	}
	function help(){
		$this->common->yield("help");
	}
	function login(){
		$this->common->yield("login");
	}
	function signup(){
		$this->common->yield("signup","guest");
	}
}
?>