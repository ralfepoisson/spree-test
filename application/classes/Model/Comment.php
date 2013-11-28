<?php

class Model_Comment extends Model
{
	
	public $uid;
	public $datetime;
	public $author;
	public $email;
	public $comment;
	public $parent_id;
	public $parent;
	public $active;
	
	public function __construct($uid=0) 
	{
		if ($uid) {
			$this->uid = $uid;
			$this->load_db();
		}
	}
	
    public function display() 
    {
    	// Create the View Object
		$view = View::factory('snippets/comment');
		
		// Set View Variables
		$view->author = $this->get_author();
		$view->datetime = $this->get_datetime();
		$view->comment = $this->get_comment();
		$view->comment_id = $this->uid;
		$view->children = Model_Comment::comment_list($this->uid);
		
		// Display the View
		return $view->render();
    }
    
    public function get_datetime() 
    {
    	// Extract Date Components
    	$H = substr($this->datetime, 11, 2);
    	$i = substr($this->datetime, 14, 2);
    	$s = substr($this->datetime, 17, 2);
    	$m = substr($this->datetime, 5, 2);
    	$d = substr($this->datetime, 8, 2);
    	$Y = substr($this->datetime, 0, 4);
    	
    	// Return Formatted Date/Time
    	return date("j F Y H:i:s", mktime($H, $i, $s, $m, $d, $Y));
    }
    
    public function get_comment() 
    {
    	// Return HTML rendered Comment
    	return str_replace("\n", "<br>", $this->comment);
    }
    
    public function get_author() 
    {
    	// Return the author's name as a hyperlink to their email
    	return "<a href='mailto:{$this->email}'>{$this->author}</a>";
    }
    
    public function save() 
    {
    	// Insert into the database if this is a new instance
    	if (!$this->uid) {
    		$insert = DB::insert('comments')
				->columns(array('datetime', 'author', 'email', 'comment', 'parent_id', 'active'))
				->values(array($this->datetime, $this->author, $this->email, $this->comment, $this->parent_id, 1));
			list($insert_id, $affected_rows) = $insert->execute();
			
			// Update this instance's uid
			$this->uid = $insert_id;
		}
		// If instance already exists, then update the record
		else {
			$sql = "	UPDATE
							`comments`
						SET
							`author` = :author,
							`email` = :email,
							`comment` = :comment,
							`parent_id` = :parent_id
						WHERE
							`uid` = :uid
					";
			$query = DB::query(Database::UPDATE, $sql)
				->bind(':uid', $this->uid)
				->bind(':author', $this->author)
				->bind(':email', $this->email)
				->bind(':comment', $this->comment)
				->bind(':parent_id', $this->parent_id);
			$query->execute();
		}
    }
    
    public function delete() 
    {
    	$sql = "	UPDATE
						`comments`
					SET
						`active` = 0
					WHERE
						`uid` = :uid
				";
		$query = DB::query(Database::UPDATE, $sql)
			->bind(':uid', $this->uid);
		$query->execute();
    }
    
	public static function comment_list($parent_id=0)
	{
		// Get Comments
		$results = DB::select('uid')->from('comments')->where('parent_id', '=', $parent_id)->execute();
		
		// Generate HTML
		$html = "";
		foreach($results as $item)
		{
			// Create Comment Object
			$comment = new Model_Comment($item['uid']);
			
		    // Append Comment to HTML
		    $html .= $comment->display();
		}
		
		// Return HTML
		return $html;
	}
	
	private function load_db()
	{
		// Get Object Data
		$results = DB::select()->from('comments')->where('uid', '=', $this->uid)->execute();
		$result = $results[0];
		
		// Populate Properties
		foreach ($result as $key => $value) {
			$this->$key = $value;
		}
	}

}
