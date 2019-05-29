@extends('layouts.app')

@section('title', 'Inicio')

@section('contenido')
<!--PRELOADER-->
	<section id="jSplash">
		<div id="circle"></div>
	</section>

<!--Nice Scroll-->           <!--Used For Mobile Resolution-->
<div id="menutop"></div>
<!--Nice Scroll--> 

<!--Wrapper 
=============================-->
<!--<div id="wrapper">-->
	<!--<div id="mask">-->
		<!-- Mainheader Menu Section -->	
		
		<!-- // Mainheader Menu Section -->
				
					

		<!--Home Page
		=============================-->

		<div id="home" class="item">
			<div class="clearfix">
				<div class="header_details">
					<div class="container">
						<div class="header_icons accura-header-block accura-hidden-2xs">
							<ul class="accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix">
								<li id="1"><a href="http://www.facebook.com" target="_blank" class="accura-social-icon-facebook circle"><i class="fa fa-facebook"></i></a></li>
								<li id="2"><a href="https://www.youtube.com" target="_blank" class="accura-social-icon-gplus circle"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="call">
							<div class="home_address">
								Av. Casuarinas 450,<br> Santiago de Surco, Lima.<br>
							</div>
							<i class="fa fa-phone"></i>&nbsp;&nbsp;+51 (01) 344 4100
						</div>
					</div>
				</div>
				<div id="boxgallery" class="boxgallery" data-effect="effect-2">
					<div class="panel"><img src="img/7.jpg" alt="image 7"/></div>
					<div class="panel"><img src="img/10.jpg" alt="image 10"/></div>
					<div class="panel"><img src="img/8.jpg" alt="image 8"/></div>
					<div class="panel"><img src="img/4.jpg" alt="image 4"/></div>
				</div>
			</div>
		</div>
				
		<!-- // Home Page
		=============================-->



		<!-- Footer
		=============================-->
		<div id="footer" class="footer">
			<div class="copyright">Copyrights &copy; AOPIP 2019.</div>
		</div>
		<!-- // Footer Ends
		=============================-->




		<!--Special Menu 
		=============================-->
		<div id="specialmenu" class="toHideTheBubbles hidden-phone">
			<div class="spcontainer">
				<div id="spmenu1">
					<button class="spmenu spmenu1" onClick="modalshow('#comunicados')"  data-toggle="modal" data-target="#lightbox" >
						<span><i class="fa fa-exclamation"></i></span>
						<span class="sptext"><span></span>Comunicados</span>
					</button>
				</div>
			</div>
		</div>
		<!-- // Special Menu 
		=============================-->




		<!--Lightbox  for home page special promo pack
		=============================-->
		<div id="comunicados">
			<div id="lightbox" class="lightbox3 modal fade" tabindex="-1" role="dialog" aria-labelledby="comunicados" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<button class="close" data-dismiss="modal"><img src="img/close.png" alt=" "></button>
						<div class="modal-body">
							<div class="content_overlay">
								<div class="content_text contentscroll">
									<h1 class="text-center">Comunicados</h1>
									<p>Entérate de todo lo que sucede en el club AOPIP.</p> <br />
									<!-- div one created -->
									<div class="pad_top30">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Monday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;18</h4></div>
													<div class="specials-content" >
														<h4>POT STICKERS (6)</h4>
														<p>(fried dumplings filled with ground pork and vegetables)</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;20</h4></div>
													<div class="specials-content" >
														<h4>SATAY</h4>
														<p>Choice of chicken or beef marinated in thai herbs served with peanut sauce and cucumber salad.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;35</h4></div>
													<div class="specials-content" >
														<h4>CURRY PUFF</h4>
														<p>Puff pastry stuffed with ground chicken, onion, potatoes and curry powder with cucumber salad.</p>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Tuesday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;22</h4></div>
													<div class="specials-content" >
														<h4>Spring Roll</h4>
														<p>Crispy fried rolls stuffed with shrimp and glass noodles.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;18</h4></div>
													<div class="specials-content" >
														<h4>Pork Loin</h4>
														<p>Roasted Pork, Swiss Chard, Ramps and Wheat Spaetzle.</p>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div>
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Wednesday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;14</h4></div>
													<div class="specials-content" >
														<h4>Devil's Food Cake</h4>
														<p>Chocolate, Black Cardamom, Banana Ice Cream.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;20</h4></div>
													<div class="specials-content" >
														<h4>SATAY</h4>
														<p>Choice of chicken or beef marinated in thai herbs served with peanut sauce and cucumber salad.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;25</h4></div>
													<div class="specials-content" >
														<h4>Vegetable Frittata</h4>
														<p>Asparagus, fresh thyme, baked in a cast iron skillet.</p>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div>
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Thursday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;12</h4></div>
													<div class="specials-content" >
														<h4>Almond Cake</h4>
														<p>Rhubarb, Mascarpone Cream and Brown Sugar Ice Cream.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;16</h4></div>
													<div class="specials-content" >
														<h4>Potato Salad</h4>
														<p>Black Bass, Fennel, Olives and Fingerling Potatoes.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Friday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;30</h4></div>
													<div class="specials-content" >
														<h4>Egg Sandwich</h4>
														<p>Scrambled eggs, on our whole wheat, with carrot hash browns.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;26</h4></div>
													<div class="specials-content" >
														<h4>Mushroom Broth</h4>
														<p>Spring Onion & Smoked Egg, Kohlrabi and Emmer Noodles.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Saturday &amp; Sunday</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-round"><h4>$&nbsp;35</h4></div>
													<div class="specials-content" >
														<h4>Egg with Chees</h4>
														<p>Kale & Ancient Grains Salad, Dates, Sbrinz Cheese. </p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;18</h4></div>
													<div class="specials-content" >
														<h4>Pork Loin</h4>
														<p>Roasted Pork, Swiss Chard, Ramps and Wheat Spaetzle.</p>
													</div>
												</div>
												<div class="clearfix">
													<div class="specials-round"><h4>$&nbsp;25</h4></div>
													<div class="specials-content" >
														<h4>Vegetable Frittata</h4>
														<p>Puff pastry stuffed with ground chicken, onion, potatoes and curry powder with cucumber salad.</p>
													</div>
												</div>
											</div>
										</div>
									</div><!-- last div ends here -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Lightbox  for home page special promo pack-->
	<!--</div>-->
<!--</div>-->
<!-- // Wrapper =============================-->
@endsection