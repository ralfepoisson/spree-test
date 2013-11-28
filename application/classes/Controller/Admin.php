<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller 
{

	public function action_index()
	{
		// Create the View Object
		$view = View::factory('pages/admin');
		
		// Set View Variables
		$view->title = "Admin";
		$view->listing = Model_Comment::admin_listing("%");
		
		// Display the View
		$this->response->body($view);
	}
	
	public function action_delete() 
	{
		// Get ID
		$comment_id = $this->request->param("id");
		
		// Create Object
		$comment = new Model_Comment($comment_id);
		
		// Delete the Comment
		$comment->delete();
		
		// Redirect
		$this->action_index();
	}
	
} // End Welcome
