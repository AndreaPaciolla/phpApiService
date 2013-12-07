<?php



class UserController {	

	public static function getUser($id) {

		if ( $user = User::find_by_id( (int)$id ) )
			echo json_encode( $user->to_array() );
		else
			echo json_encode( array("error" => true) );
		
	}

	public static function getUsers() {
		#die( var_dump( User::all() ) );
		if( $users = User::all() )
			echo json_encode( $users->to_array() );
		else
			echo json_encode( array("error" => true) );	
	}


}
