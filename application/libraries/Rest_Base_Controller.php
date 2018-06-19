<?php 

require APPPATH.'/libraries/Rest_Controller.php';

class Rest_Base_Controller extends Rest_Controller{

	public function __getjson(){
		return json_decode(file_get_contents("php://input"),true);
	}


}
?>