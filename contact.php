<h1>Contact Form</h1>

				<div id="contact">
					<iframe src="https://maps.google.com/maps?q=ka%C5%A1inska%20143c&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>						
								<form action="action_page.php" id="contact_form" name="contact_form" method="POST">
									<label for="firstName">First Name *</label>
									<input type="text" id="firstName" name="firstname" placeholder="Your name.." required>
					
									<label for="lastName">Last Name *</label>
									<input type="text" id="lastName" name="lastname" placeholder="Your last name.." required>
									
									<label for="eMail">Your E-mail *</label>
									<input type="email" id="eMail" name="email" placeholder="Your e-mail.." required>
					
									<label for="country">Country</label>
									<select id="country" name="country">
									  	<option value="">Please select</option>
									  	<option value="AF">Afghanistan</option>
										<option value="AX">Åland Islands</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
									</select>
					
									<label for="subject">Subject</label>
									<textarea id="subject" name="subject" placeholder="Type your message here.." style="height:200px"></textarea>
					
									<input type="submit" value="Submit">
								</form>						
					</div>