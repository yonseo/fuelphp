<?php
class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		//'remember_me',
		'profile_fields',
		'created_at',
		'updated_at'
	);
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('email', 'Email', 'required|max_length[255]');
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('password', 'Password', 'required');
		return $val;
	}
	public function get_name()
	{
		$data = Auth::get_profile_fields();
		return $data['firstname'] . ' ' . $data['lastname'];
	}
	public function get_profile_field($field)
	{
		$data = Auth::get_profile_fields();
		if (isset($data[$field]))
			return $data[$field];
		else
			return null;
	}
}
