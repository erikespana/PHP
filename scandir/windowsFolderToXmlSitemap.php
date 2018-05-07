<?php
$path    = 'C:\MAMP\htdocs\folder\subfolder';
/*
Create an array of directory structure recursively.

in_array()    http://php.net/manual/en/function.in-array.php
is)_dir()     http://php.net/manual/en/function.is-dir.php
str_replace() http://php.net/manual/en/function.str-replace.php

MAMP Php can read the folder contents of a network drive.
*/

function echoUrl( $url ) {
  echo "<url><loc>" . $url . "</loc></url>\n";
}

function dirToArray($dir) {
   $result = array(); // init array

   // get array of files and directories inside the specified path
   $cdir = scandir($dir);

   foreach ($cdir as $key => $value)  // loop through each array element
   {
      if ( !in_array($value, array(".","..","Thumbs.db","web.config")) ) // check if $value is . or ..
      {
         if (is_dir( $dir . DIRECTORY_SEPARATOR . $value)) // if $dir/$value is a folder...
         {
           // call dirToArry with $value
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
         }
         else
         {
            //$result[] = $value;
            $url = $dir . DIRECTORY_SEPARATOR . $value;
            $search = array("C:\\MAMP\\htdocs\\folder\\", "\\", "&", " ");
            $replace = array("http://domain.com/", "/", "&amp;", "&#x20;");
            $url = str_replace($search, $replace, $url);
            echoUrl($url);
         }
      }
   }
   // return array
   return $result;
}

dirToArray($path);
//print_r ( dirToArray($path) ); // print directory structure

$end_time = time();
//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($end_time - $start_time);

//execution time of the script
echo "\n<b>Total Execution Time:</b> ".$execution_time.' secs';
?>
