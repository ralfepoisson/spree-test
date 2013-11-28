/*
Spree Assignment

@author Ralfe Poisson <ralfepoisson@gmail.com>
@version 0.1
@copyright Copyright (c) 2013 Ralfe Poisson

*/

function post_comment() {
	// Get Variables
	var name = $("#comment_name").val();
	var email = $("#comment_email").val();
	var comment = $("#comment_comment").val();
	var parent_id = $("#comment_parent_id").val();
	
	// Validate
	if (!(name.length > 2)) {
		alert("Please enter in your name");
		return false;
	}
	if (!(email.indexOf("@") > 1) || !(email.length > 5)) {
		alert("Please enter in a valid email address");
		return false;
	}
	if (!(comment.length > 3)) {
		alert("Please enter in a comment");
		return false;
	}
	
	// Prepare URL
	var url = "index.php/ajax/post_comment/"
	url    += "?name=" + encodeURI(name);
	url    += "&parent_id=" + parent_id;
	url    += "&email=" + encodeURI(email);
	url    += "&comment=" + encodeURI(comment);
	
	// AJAX Request
	var new_html = ajax_get_data(url);
	
	// Update DOM
	if (parent_id == "0") {
		$("#comment_list").append(new_html);
	}
	else {
		$("#comment_children_" + parent_id).append(new_html);
	}
	
	// Clear Form
	$("#comment_name").val("");
	$("#comment_email").val("");
	$("#comment_comment").val("");
	$("#comment_parent_id").val("0");
	
	// Hide Modal
	$("#comment_modal").modal("hide");
}


function ajax_get_data(this_url) {
	// Get Response
	var new_html = $.ajax({
		url: this_url,
		async: false,
		dataType: "html"
	}).responseText;
	
	// Return Response
	return new_html;
}

function comment_form(comment_id) {
	// Set Parent ID Field
	$("#comment_parent_id").val(comment_id);
	
	// Display Modal
	$("#comment_modal").modal("show");
}
