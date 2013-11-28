<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller {

	public function action_index()
	{
		// Create the View Object
		$view = View::factory('pages/contact');
		
		// Set View Variables
		$view->title = "Contact";
		
		// Display the View
		$this->response->body($view);
	}

} // End Welcome
