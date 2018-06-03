						
						<img class="img" src="<?php echo base_url(); ?>images/couch.jpg">
						<h2>JavaJam Gear</h2>
						<section>
						<p class="p_text">
							JavaJam gear not only looks good, it's good to your wallet too.
							
						</p>
						<p class="p_text">
							Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!
						</p>
						</section>
						<section>
							<?php
								$count = '1';
								$attributes = array('class' => 'prod_form');
								foreach ($products as $product) : ?>
								<?php

								echo "<p><img src='" . base_url().$product['Product_Image_URL'] . "' class='product'>" . $product['Description'] . "</p>";
								echo form_open('carts/addtoCart',$attributes);
									 // <form  class = 'prod_form' method = 'post' action = 'php/classes/cart.php'>
								echo "	<input type = 'hidden' name = 'desc' value = '". $product['Name']. "' >
										<input type = 'hidden' name = 'cost' value = '". $product['Cost']. "' >
										<input type = 'hidden' name = 'id' value = '". $product['ProductId']. "' >
										<input type = 'submit' value = 'Add to Cart' name='shirt'>
									</form>
							
									<br class = 'clearleft'>"; 
									$count++; ?>
							<?php endforeach; ?>
						</section>
