<?php



class UserController {	

	/**
	 * Get the user which will be selected by the given id.
	 * @param  int $id [user's id]
	 * @return json array [the user information]
	 */
	public static function getUser($id) {
		if ( $user = User::find_by_id( (int)$id ) )
			echo json_encode( $user->to_array() );
		else
			echo json_encode( array("error" => true) );
	}

	/**
	 * Get the users' list
	 * @param  none
	 * @return json array [the users' information]
	 */
	public static function getUsers() {
		$users = array();
		foreach( User::all() as $user ) array_push($users, $user->to_array()); 
		echo json_encode($users);	
	}

	/** 
	 * Create a new user 
	 * @param  json_array [map the User's model info]
	 * @return json_array [the users' information]
	 */
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

	public static function editUser($id) {
		$response = array();

		try {
			$user = User::find_by_id( (int)$id );

			if($user->id != null) {
			
				$params = json_decode( \Slim\Slim::getInstance()->request()->getBody() );

				$user->password = $params->password;
				$user->name 	= $params->name;

				$user->save();

				unset($response);
				$response = $user->to_array();
			}else{
				$response = array('error' => true );
			}

		} catch(Exception $e) {
			\Slim\Slim::getInstance()->response()->status(500);
			$response["error"] = $e->getMessage() . " in file: " . $e->getFile() . " at line: " . $e->getLine();
		}
		

		echo json_encode($response);
	}


	public static function delUser($id) {
		$response = array("error" => false);

		try {
			$user = User::find_by_id( (int)$id );
			if($user->id != null)
				$user->delete();
			else
				\Slim\Slim::getInstance()->response()->status(500);
		} catch(Exception $e) {
			\Slim\Slim::getInstance()->response()->status(500);
			$response["error"] = $e->getMessage() . " in file: " . $e->getFile() . " at line: " . $e->getLine();
		}

		echo json_encode($response);
	}


}
