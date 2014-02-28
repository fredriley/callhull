
				  <!-- CONTENT -->
				<p>If you would like to suggest a site for inclusion in this directory, please fill in the form below. Before 
				doing so, please have a look at my <a href="criteria.html">criteria for inclusion</a>, and bear in mind that I do 
				<em>not</em> list commercial sites unless they have <em>substantial</em> free content. If you don't like forms, 
				email me at <span class="label label-info">fred DOT riley AT gmail DOT com</span>, or post a suggestion to the <a href="https://www.facebook.com/CALLHull">CALL@Hull Facebook page</a>. Fields labelled <span class="label label-important">as important</span> are required, and you'll be slapped on the wrist if you leave them empty. </p>

				<form action="http://www.fredriley.org.uk/callhull/php/formmail.php" method="POST" class="form-horizontal" id="frm_email" >
					<!-- anti-spambot @ mangling - see http://www.tectite.com/fmdoc/at_mangle.php -->
					<input type="hidden" name="recipients" value="fred.riley_@_gmail.com" />
					<input type="hidden" name="subject" value="CALL@Hull site suggestion" />
					<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR, HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
					<input type="hidden" name="good_url" value="http://www.fredriley.org.uk/callhull/form/thanks" />
					<input type="hidden" name="bad_url"  value="http://www.fredriley.org.uk/callhull/form/error" />
					<fieldset>
						<legend>Resource information</legend>
							<p><label for="title" class="label label-important"><strong>Title</strong></label><br>
							<input type="text" name="title" id="title" class="required" required ></p>
							
							<p><label for="url" class="label label-important"><strong>URL</strong></label><br>
							<input type="text" name="url" id="url" class="required url" required ></p>	
							
							<p><label for="description" class="label label-important"><strong>Brief description</strong></label><br>
							<textarea name="description" id="description" class="required" required rows="6" cols="50" ></textarea><br>
							<span class="label label-warning">NB:</span> <em>Plain text only - no HTML accepted</em></p>
							
							<p><label for="category" class="label"><strong>Category</strong></label><br>
							<select size="1" name="category" id="category" >
								<option value="general" >General</option>
								<option value="language-specific">Language-specific</option>
								<option value="multilingual">Multilingual</option>
								<option value="oer">OER</option>
								<option value="internet">Internet</option>
							</select>
							<label for="language">If language-specific, which language(s)</label>
							<input type="text" name="language" id="language"></p>
					</fieldset>
					<fieldset>
						<legend>About you</legend>
						<p><label for="realname" class="label label-important"><strong>Your name</strong></label><br>
						<input name="realname" id="realname" class="required" required	></p>
						
						<p><label for="email" class="label label-important"><strong>Your email</strong></label><br>
						<input name="email" id="email" class="required email" required ></p>
						
					</fieldset>
					<input type="submit" value="Submit suggestion" class="btn" >
				
				
				</form>
					
										
				<!-- END CONTENT -->


			
