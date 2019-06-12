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
								<li id="1"><a href="https://www.facebook.com/asociacion.deoficialespip/" target="_blank" class="accura-social-icon-facebook circle"><i class="fa fa-facebook"></i></a></li>
								<li id="2"><a href="https://www.youtube.com/channel/UCXwR5SuQGr0yOUsyMPIow8Q" target="_blank" class="accura-social-icon-gplus circle"><i class="fa fa-youtube"></i></a></li>
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
				<div class="clearfix">
					<div class="cycle-slideshow" 
					data-cycle-caption-plugin="caption2" 
					data-cycle-slides="li" 
					data-cycle-fx='scrollHorz' 
					data-cycle-speed='700' 
					data-cycle-timeout='7000' 
					data-cycle-pause-on-hover="true" 
					data-cycle-prev=".hprev" 
					data-cycle-next=".hnext"     
					data-cycle-overlay-template="<div class=banner-background style=background-image:url(img/{ {background} })></div>" 
				  	data-cycle-caption-template="<span class=caption1>{ {caption1} }</span> <span class=caption2>{ {caption2} }</span>" 
					data-cycle-easing="easeOutBack">
						<ul>
							<li data-cycle-background="banner_005.jpeg" data-cycle-caption1="¿Qué deseas hacer con tu tiempo libre?"  data-cycle-caption2=""></li>
							<li data-cycle-background="banner_006.jpeg" data-cycle-caption1="Ven a pasar un fin de semana en Casuarinas AOPIP" data-cycle-caption2=""></li>
							<li data-cycle-background="banner_007.jpeg" data-cycle-caption1="Disfruta del sol y la brisa del mar en Santa María AOPIP" data-cycle-caption2=""></li> 
							<li data-cycle-background="banner_008.jpeg" data-cycle-caption1="Tómate unas vacaciones en Chosica AOPIP" data-cycle-caption2=""></li>
						</ul>
						<div class="hprev"><i class="fa fa-angle-left"></i></div>
						<div class="hnext"><i class="fa fa-angle-right"></i></div>
						<div class="cycle-overlay"></div>
						<div class="cycle-caption"></div>
						<div class="cycle-pager"></div>
						<div class="pattern_bg"></div>
					</div>
				</div>
				<!--<div id="boxgallery" class="boxgallery" data-effect="effect-2">
					<div class="panel"><img src="img/banner_005.jpg" alt="¿Qué deseas hacer con tu tiempo libre?"/></div>
					<div class="panel"><img src="img/banner_002.jpeg" alt="Ven a pasar un fin de semana en Casuarinas AOPIP"/></div>
					<div class="panel"><img src="img/banner_003.jpeg" alt="Disfruta del sol y la brisa del mar en Santa María AOPIP"/></div>
					<div class="panel"><img src="img/banner_004.jpeg" alt="Tómate unas vaciones en Chosica AOPIP"/></div>
				</div>-->
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
												<div class="toggle-link toggle-open">Amazonas - Cross Training</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-content" >
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/amazonas_001.jpeg" width="560" alt="amazonas_001"/></div>
														<div class="text-center"><img src="img/amazonas_002.jpeg" width="560" alt="amazonas_002"/></div>
														<div class="text-center"><img src="img/amazonas_003.jpeg" width="560" alt="amazonas_003"/></div>
														<div class="text-center"><img src="img/amazonas_004.jpeg" width="560" alt="amazonas_004"/></div>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<!-- div one created -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Amistoso: Perú - Colombia</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-content" >
														<div class="text-center"><img src="img/partidoPeruColombia.jpeg" width="560" alt="comunicado_001"/></div>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Comunicado: Denuncia por delito en contra de los datos</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-content" >
														<div class="text-center"><img src="img/comunicado_001.jpeg" width="560" alt="comunicado_001"/></div>
														<div class="text-center"><img src="img/comunicado_002.jpeg" width="560" alt="comunicado_001"/></div>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">La final de la UEFA Champions League</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<div class="specials-content">
														<div class="text-center"><img src="img/volante_20190601.png" width="560" alt="La final de la UEFA Champions League"/></div>
													</div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
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