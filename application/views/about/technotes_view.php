
				  <!-- CONTENT -->
				<?php $this -> load -> view('about/about_submenu_view', $active_submenu); ?>
						
				<p>This page is for the benefit of web developers who are curious about how the site is put together, and is also a useful <em>aide memoire</em> for myself. It's strictly for techies who understand HTML, CSS, web design, and PHP. </p>

				<h2>Page design</h2>
				<p>The excellent, almost ubiquitous, <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> framework is used for page design. I've used the <a href="http://bootswatch.com/cerulean/">Cerulean Bootswatch</a> stylesheet for convenience, though will be rolling my own theme when I get the time. <a href="tech_resources.html#bootstrap">Some useful Bootstrap resources</a>.  </p>
				
				<h2>Code</h2>
				<p>Every line of the HTML is lovingly hand-crafted to deliver that artisan experience which is so lacking in today's Web. I've used HTML5 wherever possible, without busting my knackers on intricate and baroque semantic markup. I did use static HTML files on the first redesign pass, but it became too awkward to maintain code and keep the site scalable (SSIs support is rarer than hen's teeth these days) so I've used the PHP framework <a href="http://codigniter.com/">Codeigniter</a> for the second pass. This also prepares the way for the site to become a proper database-driven repository. </p>

				<h2>Graphics</h2>
				<p>Icons come from the <a href="https://commons.wikimedia.org/wiki/Tango_icons">Tango Icon set</a>, a very useful open project to deliver a stylistically-consistent set of user interface icons. Clipart is from the <a href="http://openclipart.org/">Open Clipart</a> project. </p>

				<h2>Form handling</h2>
				<p>The chunky and sophisticated <a href="http://www.tectite.com/formmailpage.php">Tectite FormMail</a> PHP script is used to handle HTML form submissions, as it has a stack of features, is Open Source, and looks to be fairly secure from crackers and spambots. <a href="http://www.tectite.com/fmdoc/at_mangle.php">Email mangling</a> is used server-side to try to confuse spambots, and autorespond is not enabled so that parasites can't use the form to send out spam. The script does support the use of CAPTCHAs but they drive me potty and I'm sure would deter users from contacting me. This will shortly be superseded by Codeigniter forms for added security. </p>
				
				<h2>Search engine</h2>
				<p>I've used the lightweight, Open Source PHP script <a href="http://www.sphider.eu/">Sphider</a> as the site search engine. It's quick, because it searches a site index, easy to configure and administer, and is only . Best of all, it's not the ubiquitous Google CSE, which apart from being a PITA to configure and putting data into Google's hands, slows down page loading by contacting insanely busy Google servers. Keep it light and simple, and under your own control, is my principle. The only minor nuisance of Sphider is that I have to remember to re-index the site on occasion, but that's quick and simple enough via the admin interface. </p>
				<p>A good, brief <a href="http://www.thesitewizard.com/archive/searchengine.shtml">guide to site search engine options</a> is available on <a href="http://www.thesitewizard.com/">thesitewizard.com</a> and is worth a read. 		
				<!-- END CONTENT -->

			
