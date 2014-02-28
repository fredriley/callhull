<?php
/**
* Left navbar generated dynamically from a defined array of navigation items. A foreach loop 
* goes through the array and prints list items, optionally marking one as 'active'.

*/

# Define nav items in array of arrays. The array key isn't used 'publicly' so can be owt
$nav_items = array (
	"g" => array (
				"text" => "General", 
				"title" => "General sites for languages", 
				"accesskey" => "g", 
				"url" => "general" ), 
	"l" => array (
				"text" => "Language-specific", 
				"title" => "Sites in or for a specific language", 
				"accesskey" => "l", 
				"url" => "language"), 
	"m" => array (
				"text" => "Multilingual", 
				"title" => "Sites in or for multiple languages", 
				"accesskey" => "m", 
				"url" => "multi" ), 

	"o" => array (
				"text" => "OER", 
				"title" => "Open Educational Resources", 
				"accesskey" => "o", 
				"url" => "oer"), 
	"i" => array (
				"text" => "Internet", 
				"title" => "Internet-based language learning and teaching", 
				"accesskey" => "i", 
				"url" => "internet"), 
	"s" => array (
				"text" => "Suggest a site", 
				"title" => "Suggest a site for inclusion in this collection", 
				"accesskey" => "s", 
				"url" => "suggest"), 				
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
			  <li class=""> <a href="general.html"> General </a> </li>
			  <li class=""> <a href="languages.html"> Language-specific </a> </li>
			  <li class=""> <a href="multi.html"> Multilingual </a> </li>
			  <li> <a href="oer.html"> OER <br>
				</a> </li>
			  <li> <a href="internet.html"> Internet <br>
				</a> </li>
			  <li> <a href="suggest.html"> Suggest a site <br>
				</a> </li>
			  <li class="divider-vertical"> <br>
			  </li>
			</ul>
		  </nav>
			<nav class="well sidebar-nav"> 
				<ul class="nav nav-list" id="elearningnav">
				  <li class="nav-header"> E-learning resources <br></li>
				  <li> <br>  </li>
				  <li class=""> <a href="#" title="The OTiS Online Learning E-Book"> OTiS </a></li>
				  <li class=""> <a href="#" title="Useful sources of freely usable images (photos and clipart)" > Image repositories </a> </li>
				</ul>
			</nav>		  
			<nav class="well sidebar-nav"> 
				<ul class="nav nav-list" id="callnav">
				  <li class="nav-header"> CALL &amp; TELL <br></li>
				  <li> <br>  </li>
				  <li class=""> <a href="http://www.eurocall-languages.org"> EUROCALL </a></li>
				  <li class=""> <a href="https://www.calico.org/"> CALICO </a> </li>
				  <li class=""> <a href="http://www.worldcall.org/"> WORLDCALL </a> </li>
				</ul>
			</nav>
		</div>
		<!-- END LEFT NAVBAR -->
