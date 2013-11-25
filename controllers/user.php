<?php



class UserController {

	public static function getUser($id) {
	    $user = User::find_by_id($id)->to_array();

	    echo json_encode( $user );
	}

	public static function getUsers() {
		$users = User::all()->to_array();
	    echo json_encode( $users );
	}


}
