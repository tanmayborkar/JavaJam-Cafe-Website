	
						<h2 style="border-top: 15px solid; margin-top:0;">Jobs at JavaJam</h2>
						<section>
							<p class="p_text p_jobs">
								Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*).
							</p>
						</section>
						<section>
							<div class="div_form">
								<!-- <script>
									function ValidationEvent() {
										var name = document.getElementById("name").value;
										var email = document.getElementById("email").value;
										var exp = document.getElementById("exp").value;
										
										if(name==""||name==null) {
											alert('Enter Name');
											return false;
										}
										if(email==""||email==null){
											alert('Enter Email');
											return false;
										}
										if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
											alert('You have entered an invalid email address!');
											return (false);
										}
										if(exp==""||exp==null){
											alert('Enter Experience');
											return false;
										}
									    
									}
								</script> -->
								<?php echo validation_errors(); ?>
								<?php 
									$attributes = "onsubmit = 'return ValidationEvent()'";
									echo form_open('jobs/applyjob',$attributes);
									?>
									<label for="name">*Name:</label>
									<input type="text" class="form-control" name="name" id = "name">
									<label for="email">*Email:</label>
									<input type="text" class="form-control" name="email" id = "email">
									<label for="exp">*Experience:</label>
									<textarea rows="2" cols="18" name = "exp" id = "exp"></textarea>
									<input type="submit" name = "apply" value="Apply Now">
								</form>
							</div>
						</section>