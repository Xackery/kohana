<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$dbResult = DB::query(Database::SELECT, "SELECT * FROM employee")->execute();
		print_r($dbResult->as_array());

		$this->response->body('RAWR');
	}

} // End Welcome
