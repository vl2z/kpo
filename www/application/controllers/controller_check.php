<?php

class Controller_Check extends Controller
{
	function __construct()
		{
			$this->model = new Model_Check();
			$this->view = new View();
		}
	
	function action_index()
	{	
	
		/*if(isset($_POST['login']))
		{
			$login = $_POST['login'];
			
			if($login=="12345")
			{
				$bvar = "true";
			}
			else
			{
				$bvar="false";
				//$data["login_status"] = "access_denied";
			}
		}
		else
		{
			//$data["login_status"] = "";
		}*/
		
		
		$data = $this->model->get_data();
		$res = $this->model->get_req();
		$this->view->generate('check_view.php', 'template_view.php', $data, $res);
	}
}
