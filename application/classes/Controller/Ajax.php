<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller 
{

	public function action_index()
	{
		// Do nothing
		$this->response->body("Please specify an action");
	}
	
	public function action_post_comment()
	{
		// Create new Comment Object
		$comment = new Model_Comment();
		
		// Read in GET Data
		$comment->author = $this->request->query("name");
		$comment->email = $this->request->query("email");
		$comment->comment = $this->request->query("comment");
		$comment->parent_id = $this->request->query("parent_id");
		
		// Add timestamp and save
		$comment->datetime = date("Y-m-d H:i:s");
		$comment->save();
		
		// Return the HTML of the Comment
		$this->response->body($comment->display());
	}

} // End Welcome
