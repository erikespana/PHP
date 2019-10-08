<?php

include_once "scrape-web-pages/htmlTags.php";

// base class with member properties and methods
class fileio {
	
	var $urls;

	function __construct() {
		//$this->url = $url;
		//echo "Searching: " . $this->url;
	}
	
	// Opens a text file with a URL list.
	
	function loadFromTextfile( $readFile, $delimeter) {
		
		$html = new htmlTags();
		
		// Open $readFile
        $handle = @fopen($readFile, "r");
        

        if ($handle) {

            while ( ($buffer = fgets($handle, 4096)) !== false) {
                //echo "<p>" . $buffer . "</p>"; // debug
                
                $line[] = explode( $delimeter, $buffer);            
            }
            fclose($handle);

        } else {
            echo "<td>Can't open \$readFile<td>";
        }
		return $line;
	}

}

?>