<?php

class User extends ActiveRecord\Model {

	static $connection = 'mysql';

	public static $attr_accessible = array('id', 'name');

}