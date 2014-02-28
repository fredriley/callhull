<?php
/**
* Top navbar generated dynamically from a defined array of navigation items. A foreach loop 
* goes through the array and prints list items, optionally marking one as 'active'.

*/

# Define nav items in array of arrays. The array key isn't used 'publicly' so can be owt
$nav_items = array (
	"h" => array (
				"text" => "Home", 
				"title" => "Home page and introduction", 
				"accesskey" => "h", 
				"url" => "home" ), 
	"a" => array (
				"text" => "About", 
				"title" => "About CALL@Hull", 
				"accesskey" => "a", 
				"url" => "about"), 
	"c" => array (
				"text" => "Contact", 
				"title" => "Contact CALL@Hull", 
				"accesskey" => "c", 
				"url" => "form/contact" ), 						
	);
			
		
?>
<!-- TOP NAVBAR -->
<div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
		<a class="brand" href="home">
            CALL@Hull
          </a>
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" title="Show/hide site menu" >
				<!-- show a button with 3 horizontal lines -->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>   		  
          <div class="nav-collapse">
			<ul class="nav">
				<?php
				/**  Go through the array of navigation items, and print a list item for each one. 
				If the item text matches the text of the current section, as passed from the 
				controller as $active_topnav, set the 'active' attribute of the <li>
				*/
				foreach ($nav_items as $key => $val)
				{ 
					# start the <li> with array values...
					$li = "<li";
					# ...if the current array element (nav item) matches that passed from 
					# the controller set the <li> class attribute to 'active'...
					if ($active_topnav == $val['text']) 
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
			</ul>	
          </div>
          <form class="navbar-form pull-right" action="php/sphider/search.php" method="get">
			<input type="hidden" name="search" value="1">
            <input name="query" id="query" placeholder="Search" class="span2" type="text" columns="2" autocomplete="off" delay="1500">
            <input type="submit" class="btn" value="search">
          </form>
        </div>
      </div>
    </div>
<!-- END TOP NAVBAR -->
