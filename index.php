<?php include 'header.php'; 


		$slider_data = "select * from slider_manage order By id DESC limit 0,3";
		$select_slider_data = mysqli_query($con,$slider_data);

		$offer_data = "select * from offer_manage";
		$select_offer_data = mysqli_query($con,$offer_data);

		$recent_data = "select * from recent_manage";
		$select_recent_data = mysqli_query($con,$recent_data);

		$blog_data = "select * from blog_table ORDER BY `blog_table`.`id` DESC";
		$select_blog_data = mysqli_query($con,$blog_data);


?>
				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>

								<?php while($row_slider = mysqli_fetch_assoc($select_slider_data)) { ?>

								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="admin/slider_image/<?php echo $row_slider['slider_image']; ?>" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row_slider['title']; ?></div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row_slider['dis']; ?></div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
								</li>

								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				
				

				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>

						<?php while($row_offer = mysqli_fetch_assoc($select_offer_data)) { ?>

						<div class="service-item col-md-4">
							<span><i class="<?php echo $row_offer['icon']; ?> "></i></span>
							<div class="tittle"> <h3> <?php echo $row_offer['title']; ?></h3></div>
							<p ><?php echo $row_offer['dis']; ?></p>
						</div>

						<?php } ?>

					</div>
				</section>
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>Over 3000 people already downloaded YOM</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>To know about this theme read this</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image hidden-xs"></div>
					</div>
				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
									<?php while ($row_recent = mysqli_fetch_assoc($select_recent_data)) { ?>
									<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="admin/recent_image/<?php echo$row_recent['recent_image']; ?>">
				        					<figcaption>
				            					<h3><?php echo $row_recent['title']; ?></h3>
				            					<p><?php echo $row_recent['dis']; ?></p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    			<?php } ?>
								</div>
							</div>
						</div>
					
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.html" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2>What Others saying</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramshad Imeri - <em>India,Malappura</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Akhil Luis - <em>India, Calicut</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramkumar - <em>Munnar, Kerala</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sajit OB - <em>Berlin, Germany</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Anithamol Benny - <em>Thodupuzha, Kottayam</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sreejith Rajan - <em>India, Alappuzha</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Aneeshkumar - <em>Kakkanad ,Cochin</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Rohit Sarma - <em>Gurgaon, India</em></h6>
								  		</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-3">
					<div class="container">
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8">Read your lastest newsletters, we have an offer for you!</h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#">Take it now</a></div>
						</div>
					</div>
				</section>

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>
						<?php $id=0; while($row = mysqli_fetch_assoc($select_blog_data)) { ?>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php?id=<?php echo $id; ?>"><img src="admin/image/<?php echo $row['image']; ?>" alt=""></a>
								<h3> <?php echo $row['title']; ?></h3>
								<span> <?php echo $row['author_name']; ?> /  <?php echo $row['a_date']; ?> / <a href="#">Uncategorized</a></span>
								<p><?php echo $row['dis']; ?></p>
								<div class="read-more">
									<a href="blog-single.php?id=<?php echo $id; ?>">Read more</a>
								</div>
							</div>
						</div>
					<?php $id++; } ?>
					

					</div>
				</section>
               <?php include 'footer.php' ?>