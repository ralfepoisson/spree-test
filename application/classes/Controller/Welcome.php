<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		// Create the View Object
		$view = View::factory('pages/home');
		
		// Set View Variables
		$view->title = "Home";
		$view->comments = Model_Comment::comment_list(0);
		
		// Display the View
		$this->response->body($view);
	}

} // End Welcome
