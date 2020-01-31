<?php

$open = "20191101-wc-si-index.html";
$fileSaveAs = "20191101-wc-si-index-local.html";

$search = array(
	// siteimprove
	'<script src="../../_global/js/siteimprove.js" type="text/javascript"></script>',
	// google analytics
	"<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-32585114-1', 'auto');
	ga('send', 'pageview');
  </script>
  <script>
	(function() {
	  var cx = '008621979304415920892:ny5jxlmgkwg';
	  var gcse = document.createElement('script');
	  gcse.type = 'text/javascript';
	  gcse.async = true;
	  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
	  var s = document.getElementsByTagName('script')[0];
	  s.parentNode.insertBefore(gcse, s);
	})();
  </script>",
	
	'../../', 			//	src="../, href="../
	'//ajax',
	'src="artwork',
	);

$replace = array(
	'',
	'',
//	'src="https://www.tdi.texas.gov/',
	'https://www.tdi.texas.gov/',
	'https://ajax',
	'src="https://www.tdi.texas.gov/takefive/artwork'
	);

// save the html to $html
$text = file_get_contents($open);

$text = str_replace( $search, $replace, $text, $count);
echo $count . " matches";
	
// read a view source file and save text to $text
	

// replace text

// PREG_SET_ORDER - Orders results so that $matches[0] is an array of first set of matches, $matches[1] is an array of second set of matches, and so on.
//if ( preg_match_all($pattern, $text, $matches, PREG_SET_ORDER)) {
	/*
	echo "preg_match_all " . count($matches);
	print_r($matches);
	*/
	
//	foreach ($matches as $val) {
//			$date = $val[1];
//			$type = $val[2];
//			$description = $val[3];
//			echo $tag->tr( 
//					$tag->td( $date ) .
//					$tag->td( $type) .
//					$tag->td( $description)
//					) . "\n";
//	}
//}
// Debugging: Prints the contents of the class's $html variable.
//$obj->showHTML();

// save new file
file_put_contents($fileSaveAs, $text);


?>
