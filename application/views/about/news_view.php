
				  <!-- CONTENT -->
				<?php $this -> load -> view('about/about_submenu_view', $active_submenu); ?>
				<h3>E-learning resources</h3>
				<p><em>28/02/13</em></p>
				<p>I've added two useful elearning resources to CALL@Hull, which might be of use and interest to e-learning practitioners in languages and beyond:</p>
				<p><a href="elearning/otis">OTiS Online Tutoring Ebook</a>. This is an authoritative primer on e-learning pedagogy and methodology, full of practical implementation guidelines, which although it dates back to 2000 is still mostly relevant today as it deals with generic theory and practice in e-learning.</p>

				<p><a href="elearning/media">Media repositories for e-learning</a>. A short page of sources of free, and freely-usable, media, in particular bitmap and vector images. </p>
				
				<h3>CALL@Hull goes dynamic</h3>
				<p><em>27/02/13</em></p>
				<p>This site has been converted from a static site, comprising HTML files, to a 'dynamic' site, driven by server-side scripts using the PHP <a href="http://codeigniter.com">Codeigniter</a> framework. Users won't notice any substantial difference in design and functioning, although URLs will be snappier (eg languages/french rather than languages/french.html). However, the site will be easier to maintain and to scale, and will be ready to become a fully database-driven site when I get the time to put together a proper repository. Watch this space, and of course the Facebook and Twitter feeds. </p>
				<hr>
				<h3>CALL@Hull site redesign</h3>
				<p><em>27/12/12/</em></p>
				<p>The CALL@Hull site has been radically redesigned, to bring its interface into the 21st century and make it easier to use and maintain. Content has been 'rationalised', in particular in the General and Multilingual sections, but has otherwise remained the same. It also now has social networking presences on Facebook and Twitter. Added functionality includes a search engine and 'suggest a site' form.  Those interested in the technical details of the redesign can read the <a href="about/technotes">technical notes</a> </p>
				<p>Redirections have been put in place so as not to break existing links. Note that the RSS feed has also been moved - the link in the footer has the up to date feed, so please amend your entry in your newsreader. </p>
				<p>I welcome comments on the redesign, good, bad or indifferent, via the <a href="contact">contact form or by email</a>. The main future development, when/if time allows, will be the moving of the collection into a proper resource repository and dynamic website. </p>
				<p><span class="label label-info">
					 <?php    
					// last updated time of this view. $_ci_path is an internal CI variable
					// See http://stackoverflow.com/questions/12203260/how-get-the-current-view-name-in-codeigniter/
					echo "Page last modified: " . date ("F d Y ", filemtime($_ci_path));
					?>
					</span>
				</p>
				<!-- END CONTENT -->

			
