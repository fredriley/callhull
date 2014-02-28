<?php
/**
* Left navbar generated dynamically from a defined array of navigation items. A foreach loop 
* goes through the array and prints list items, optionally marking one as 'active'.

*/

# Define nav items in array of arrays. The array key isn't used 'publicly' so can be owt
$language_nav_items = array (
	"lr" => array (
				"text" => "Latest resources", 
				"title" => "Latest resources added to this collection", 
				"accesskey" => "l", 
				"url" => "languages/latest" ), 
	"g" => array (
				"text" => "General", 
				"title" => "General sites for languages", 
				"accesskey" => "g", 
				"url" => "languages/general" ), 
	"l" => array (
				"text" => "Language-specific", 
				"title" => "Sites in or for a specific language", 
				"accesskey" => "l", 
				"url" => "languages/language"), 
	"m" => array (
				"text" => "Multilingual", 
				"title" => "Sites in or for multiple languages", 
				"accesskey" => "m", 
				"url" => "languages/multi" ), 

	"o" => array (
				"text" => "OER", 
				"title" => "Open Educational Resources for languages", 
				"accesskey" => "o", 
				"url" => "languages/oer"), 
	"i" => array (
				"text" => "Internet", 
				"title" => "Internet-based language learning and teaching", 
				"accesskey" => "i", 
				"url" => "languages/internet"), 
	"s" => array (
				"text" => "Suggest a site", 
				"title" => "Suggest a site for inclusion in this collection", 
				"accesskey" => "s", 
				"url" => "form/suggest"), 				
	);
	
$elearning_nav_items = array (
	"g" => array (
				"text" => "OTiS", 
				"title" => "The OTiS online tutoring e-book", 
				"accesskey" => "o", 
				"url" => "elearning/otis" ), 
	"l" => array (
				"text" => "Media repositories", 
				"title" => "Sources of freely-usable media: audio, video and images", 
				"accesskey" => "m", 
				"url" => "elearning/media"), 

);
			
		
?>

<!-- MAIN CONTAINER -->
<div class="container-fluid" id="main_container">
	<div class="row-fluid">
		<!-- LEFT NAVBAR -->
		<div class="span2"> 
		  <nav id="leftnav" class="well sidebar-nav"> 
			<ul class="nav nav-list">
			  <li class="nav-header"> LANGUAGE RESOURCES <br>
			  </li>
			  <li> <br>
			  </li>
			  <?php
				/**  Go through the array of navigation items, and print a list item for each one. 
				If the item text matches the text of the current section, as passed from the 
				controller as $active_topnav, set the 'active' attribute of the <li>
				*/
				foreach ($language_nav_items as $key => $val)
				{ 
					# start the <li> with array values...
					$li = "<li";
					# ...if the current array element (nav item) matches that passed from 
					# the controller set the <li> class attribute to 'active'...
					if ($active_leftnav == $val['text']) 
					{
						$li .= " class=\"active\" ";
					}
					$li .= ">";
					$li .= "<a href=\"" . $val['url'] . "\" accesskey=\"". $val['accesskey'] . "\" title=\"" . $val['title'] . "\">";

					# ...then finish off the list item and echo it
					$li .= $val['text'] . "</a></li>\n";
					echo "\t\t" . $li;
				}
			  ?>
			  <li class="divider-vertical"> <br>
			  </li>
			</ul>
		  </nav>
			<nav class="well sidebar-nav"> 
				<ul class="nav nav-list" id="elearningnav">
				  <li class="nav-header"> E-learning resources <br></li>
				  <li> <br>  </li>
			  <?php
				/**  Create menu as above, for E-LEARNING RESOURCES		*/
				foreach ($elearning_nav_items as $key => $val)
				{ 
					$li = "<li";
					if ($active_leftnav == $val['text']) 
					{
						$li .= " class=\"active\" ";
					}
					$li .= ">";
					$li .= "<a href=\"" . $val['url'] . "\" accesskey=\"". $val['accesskey'] . "\" title=\"" . $val['title'] . "\">";
					$li .= $val['text'] . "</a></li>\n";
					echo "\t\t" . $li;
				}
			  ?>
				</ul>
			</nav>		  
			<nav class="well sidebar-nav"> 
				<ul class="nav nav-list" id="callnav">
				  <li class="nav-header"> CALL &amp; TELL sites<br></li>
				  <li> <br>  </li>
				  <li class=""> <a href="http://www.eurocall-languages.org"> EUROCALL </a></li>
				  <li class=""> <a href="https://www.calico.org/"> CALICO </a> </li>
				  <li class=""> <a href="http://www.worldcall.org/"> WORLDCALL </a> </li>
				</ul>
			</nav>
		</div>
		<!-- END LEFT NAVBAR -->
