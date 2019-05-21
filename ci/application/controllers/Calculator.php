<?php

class Calculator extends CI_Controller
{

public function index()
{
	$this->load->view('calculator/index');
}

public function add(){
	if(isset($_POST['add']))
	{
		$ans = $_POST['number1'] + $_POST['number2'];
		$data = array(
			'number1' => $_POST['number1'],
			'number2' => $_POST['number2'],
			'ans' => $ans 

		);
	}
	else
	{
		$data = array(
			'number1' => "0",
			'number2' => "0",
			'ans' => "0"
		);
	}
	$this->load->view('calculator/add',$data);
}
public function subtraction(){
	if(isset($_POST['subtract']))
	{
		$ans = $_POST['number1'] - $_POST['number2'];
		$data = array(
			'number1' => $_POST['number1'],
			'number2' => $_POST['number2'],
			'ans' => $ans 

		);
	}
	else
	{
		$data = array(
			'number1' => "0",
			'number2' => "0",
			'ans' => "0"
		);
	}
	$this->load->view('calculator/subtract',$data);
}

public function multiplication(){

		if(isset($_POST['multiply']))
	{
		$ans = $_POST['number1'] * $_POST['number2'];
		$data = array(
			'number1' => $_POST['number1'],
			'number2' => $_POST['number2'],
			'ans' => $ans 

		);
	}
	else
	{
		$data = array(
			'number1' => "0",
			'number2' => "0",
			'ans' => "0"
		);
	}
	$this->load->view('calculator/multiply',$data);
}

public function division(){
if(isset($_POST['divide']))
	{
		$ans = $_POST['number1'] / $_POST['number2'];
		$data = array(
			'number1' => $_POST['number1'],
			'number2' => $_POST['number2'],
			'ans' => $ans 

		);
	}
	else
	{
		$data = array(
			'number1' => "0",
			'number2' => "0",
			'ans' => "0"
		);
	}
	$this->load->view('calculator/division',$data);
}





}



?>