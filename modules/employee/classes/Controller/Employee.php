<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employee extends Controller {

	public function action_index()
	{
		$dbResult = DB::query(Database::SELECT, "SELECT * FROM employee")->execute();
		print_r($dbResult->as_array());

		$this->response->body('Employee');
	}

	public function action_rawr() {
		//$this->response->body('Rawr');
		$this->response->body($this->request->param('id', 'No value set'));
	}

} // End Welcome
