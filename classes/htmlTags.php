<?php

/*
Wrap text in common HTML tags.

How to use:

include_once "htmlTags.php";
$obj = new htmlTags();
...
echo $obj->li( "This is a list item." );

*/

class htmlTags {
	
	var $html;

	function __construct() {
	}

	// Prints the contents of the $html variable. Used for debugging.
	function showHTML() {
		echo $this->html;
	}
	// Given a $url, returns an HTML hyperlink.
	function ahref( $url ) {
		return 	"<a href='$url'>" . $url . "</a>";
	}
	
	// Given some $content, returns an HTML table cell.
	function td( $content ) {
		return 	"<td>" . $content . "</td>";
	}
	
	// Given some $content, returns an HTML table row.
	function tr( $content ) {
		return 	"<tr>" . $content . "</tr>\n";
	}
	
	function li( $content ) {
		return 	"<li>" . $content . "</li>\n";
	}
}
?>
