
						<h3 align = "center">Shopping Cart</h3>
						<section>
							<div align="center">
								<table id="cartTable" align="center" cellpadding= "10">
									<tr>
										<th><b>Description</b></th>
										<th>Quantity</th>
										<th>Price</th>
									</tr>
									<?php 
										$i = 1; ?>
									<?php foreach ($this->cart->contents() as $items): ?>
									<tr>
	                					<!-- <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td> -->
	               						<td><?php echo $items['name']; ?></td>
										<td><?php echo $this->cart->format_number($items['qty']); ?></td>
										<td>$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
							        </tr>

									<?php $i++; ?>

									<?php endforeach; ?>

									<tr>
									    <td></td>
									    <td>Total</td>
									    <td>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
									</tr>
								</table>
								
							</div>
						</section>
						<section align="center" style = "margin-top:30px">

							<fieldset class="order_fieldset">
								<legend align = "center">Fill Details:</legend>
								<!-- <script type="text/javascript">
									function ValidateOrder() {
										var name = document.getElementById("name").value;
										var email = document.getElementById("email").value;
										var address = document.getElementById("address").value;
										var city = document.getElementById("city").value;
										var state = document.getElementById("state").value;
										var zip = document.getElementById("zip").value;
										var cc = document.getElementById("cc").value;
										var month = document.getElementById("month").value;
										var yr = document.getElementById("yr").value;
										
										
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
										if(address==""||address==null) {
											alert('Enter Address');
											return false;
										}
										if(city==""||city==null||!isNaN(city)) {
											alert('Enter Valid City');
											return false;
										}
										if(state==""||state==null||!isNaN(state)) {
											alert('Enter Valid State');
											return false;
										}
										if(zip==""||zip==null||isNaN(zip)) {
											alert('Enter Valid ZipCode');
											return false;
										}
										if(cc==""||cc==null||isNaN(cc)||cc.length>16|| cc.length<16) {
											alert('Enter Valid Credit Card Number');
											return false;
										}
										if(month==""||month==null||isNaN(month)||month>12|| month<1) {
											alert('Enter Valid Month');
											return false;
										}
										if(yr==""||yr==null||isNaN(yr)||yr<18) {
											alert('Enter Valid Year');
											return false;
										}	  
									}
								</script>
								 -->
								<?php echo validation_errors(); ?>
								<?php 
								
								$attribute =  "onsubmit = 'return ValidateOrder()'"; 
								echo form_open('placeorder/insertorder',$attribute);?>
									<table cellpadding= "5" width = "100%">
										<tr>
											<td>Name</td>
											<td><input type="text" name="name" id="name" ></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><input  name="email" id="email"></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><input type="Address" name="address" id="address" ></td>
										</tr>
										<tr>
											<td>City</td>
											<td><input type="text" name="city" id="city"></td>
										</tr>
										<tr>
											<td>State</td>
											<td><input type="text" name="state" id="state"></td>
											<td>Zip</td>
											<td><input type="text" name="zip" id="zip" ></td>
										</tr>
										<tr>
											<td>Credit Card</td>
											<td><input type="text" name="cc" id="cc"></td>
										</tr>
										<tr>
											<td>Expire Month</td>
											<td><input type="Month" name="month" id="month"></td>
											<td>Year</td>
											<td><input type="text" name="yr" id="yr"></td>
										</tr>
										<tr>
											<td></td>
											<td align="center" style="padding-top: 2%; padding-bottom: 0px;"><input type="submit" value="Order Now" name = "order"></td>
										</tr>
										<?php 
											if($popup) {
												echo '<script>alert("Cart is empty");</script>';
											}	
										?>
									</table>
								</form>
							</fieldset>
						</section>
					