<?php



class UserController {	

	public static function getUser($id) {


		if ( $user = User::find_by_id( (int)$id ) )
			echo json_encode( $user->to_array() );
		else
			echo json_encode( array("error" => true) );
		
	}

	public static function getUsers() {
		$users = array();
		foreach( User::all() as $user ) array_push($users, $user->to_array()); 
		echo json_encode($users);	
	}

	public static function addUser() {
		$response = array('error' => false);
		$params = \Slim\Slim::getInstance()->request()->getBody();
		if($params != null) {
			$params = json_decode($params);

			$user = new User();
			$user->name 	= $params->name;
			$user->password = $params->password;
			$user->save();

			unset($response);
			$response = $user->to_array();
		}else{
			$response = array('error' => true );
		}
		echo json_encode($response);
		
	}


}
