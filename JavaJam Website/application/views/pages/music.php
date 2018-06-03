
						<img class="img" src="images/heroguitar.jpg">
						<h2>Music at JavaJam</h2>
						<section>
						<p class="p_text">
							The first Friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music you won't
							want to miss!
						</p>
						</section>
						<section>
							<?php 
							$months = array(
								'01' => 'January',
								'02' => 'February',
								'03' => 'March',
								'04' => 'April',
								'05' => 'May',
								'06' => 'June',
								'07' => 'July',
								'08' => 'August',
								'09' => 'September',
								'10' => 'October',
								'11' => 'November',
								'12' => 'December'
							); ?>
							<?php 
							$max = sizeof($music);
							$previous = '';

							for ($i='0'; $i < $max; $i++) {
								// $current = 
								if($i==='0'){
									echo "<h3 class='h3_music'>". $months[substr ( $music[$i]['MonthYear'] , 0 , 2 )]. "</h3>";
								}
								if($i>0) {
									if($music[$i]['MonthYear'] != $music[$i-1]['MonthYear']){
									echo "<h3 class='h3_music'>". $months[substr ( $music[$i]['MonthYear'] , 0 , 2 )]. "</h3>";	
								}
								}
															 	
							 	echo "<div class='div_img'>
									  <p><img src='images/" . $music[$i]['Musician_Image_URL'] . "' class='img_top'>" . $music[$i]['Description'] . "</p>
									  </div>";	
							 } ?>
							
							
						</section>
					