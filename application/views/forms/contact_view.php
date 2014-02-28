
				  <!-- CONTENT -->
				<p>If you would like to contact me with bouquets, brickbats or just general comments, please fill in the form below. All fields are required. If you don't like forms, email me at <span class="label label-info">fred DOT riley AT gmail DOT com</span>. If you're into this new-fangled social networking thingy, do get in touch via <a href="https://www.facebook.com/CALLHull">Facebook</a> or <a href="https://twitter.com/RileyFred">Twitter</a>. </p>

				<form action="http://www.fredriley.org.uk/callhull/php/formmail.php" method="POST" class="form-horizontal" id="frm_email" >
					<!-- anti-spambot @ mangling - see http://www.tectite.com/fmdoc/at_mangle.php -->
					<input type="hidden" name="recipients" value="fred.riley_@_gmail.com" />
					<input type="hidden" name="subject" value="CALL@Hull site contact" />
					<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR, HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
					<input type="hidden" name="good_url" value="http://www.fredriley.org.uk/callhull/form/thanks" />
					<input type="hidden" name="bad_url"  value="http://www.fredriley.org.uk/callhull/form/error" />
						<p><label for="realname" class="label label-important">Your name</label><br>
						<input name="realname" id="realname" class="required" required	></p>
						
						<p><label for="email" class="label label-important">Your email</label><br>
						<input name="email" id="email" class="required email" required></p>
						
						<p><label for="message" class="label label-important">Your message</label><br>
						<textarea name="message" id="message" class="required" required></textarea></p>
					<input type="submit" value="Submit" class="btn" >
				
				
				</form>
							
				<!-- END CONTENT -->

			
