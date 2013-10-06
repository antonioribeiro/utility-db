<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $tableColumns = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getColumns($tableName = null) 
	{
		if (!isset($this->tableColumns)) {
			$this->tableColumns = DB::table('information_schema.columns')
								->select('column_name')
								->where('table_name', $tableName ?: $this->getTable())
								->get();

			foreach($this->tableColumns as $key => $value)
			{
				$this->tableColumns[$key] = $value->column_name;
			}			

			$this->tableColumns = array_reverse($this->tableColumns);
		}

		return $this->tableColumns;
	}
}