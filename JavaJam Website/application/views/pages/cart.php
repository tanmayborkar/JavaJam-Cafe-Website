	
						<h3 align = "center">Shopping Cart</h3>
						<section>
							<div align="center">
								<table id="cartTable" align="center" cellpadding= "10">
									<tr>
										<th>Description</th>
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
								<?php  $attributes = "align='center'";
									echo form_open('carts/onbuttonAction',$attributes); ?>
									<button name="continue" id="placeorder" type="submit" value = "order">Place Order</button>
									<button name="continue" id="continue" type="submit" value = "continue">Continue Shopping</button>	
								</form>
							</div>
						</section>