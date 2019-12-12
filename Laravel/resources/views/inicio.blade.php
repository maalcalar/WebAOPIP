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
								<li id="1"><a href="https://www.facebook.com/ClubAopip/" target="_blank" class="accura-social-icon-facebook circle"><i class="fa fa-facebook"></i></a></li>
								<li id="2"><a href="https://www.youtube.com/channel/UCXwR5SuQGr0yOUsyMPIow8Q" target="_blank" class="accura-social-icon-gplus circle"><i class="fa fa-youtube"></i></a></li>
								<li id="3"><a href="https://instagram.com/clubaopip?igshid=1fz8ha1sn8rt0" target="_blank" class="accura-social-icon-pinterest circle"><i class="fa fa-instagram"></i></a></li>
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
						<div id="root" class="modal-body">
							<div class="content_overlay">
								<h1 class="text-center">Comunicados</h1>
								<div class="content_text contentscroll">
									<!--<div id="root"></div>-->

									<!-- div one created -->
									@foreach ($comunicados as $comunicado)
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">{{ $comunicado->titulo }}</div>
											</div>
											<div class="toggle-content">
												{!! $comunicado->texto !!}
												<div class="row">
													<div class="col-xs-6">
													</div>
													<div class="col-xs-6 text-right">
														<p class="help-block"></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach

									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Balance - Al 31 de Agosto de 2019</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<a href="">
                            							<div onClick="modalshow('#mbalance01')"  data-toggle="modal" data-target="#balance01">
                               								 <div class="spimg">
                                    							<img src="{{ url('img/balance01.jpg') }}" class="img-responsive" alt="">
                              								</div>
                           						 		</div>
                        							</a>
												</div>
												<div class="clearfix">
													<a href="">
                            							<div onClick="modalshow('#mbalance02')"  data-toggle="modal" data-target="#balance02">
                               								 <div class="spimg">
                                    							<img src="{{ url('img/balance02.jpg') }}" class="img-responsive" alt="">
                              								</div>
                           						 		</div>
                        							</a>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">CONVOCATORIA DE AUDITORÍA FACEBOOK</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
													<a href="">
                            							<div onClick="modalshow('#convocatoria')"  data-toggle="modal" data-target="#lightbox2">
                               								 <div class="spimg">
                                    							<img src="{{ url('img/convocatoriaDeAuditoriaFB.png') }}" class="img-responsive" alt="">
                              								</div>
                           						 		</div>
                        							</a>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">FIESTA POR NUESTRO 71º ANIVERSARIO PIP</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/fiestaAniversario71PIP.jpeg" width="560" alt="fiestaAniversario71PIP"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">INFORME 63 - 2019 - CONTABILIDAD</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/Informe63-2019-Contabilidad_001.jpeg" width="560" alt="informa63_2019_contabilidad001"/></div>
														<div class="text-center"><img src="img/Informe63-2019-Contabilidad_002.jpeg" width="560" alt="informa63_2019_contabilidad002"/></div>
														<div class="text-center"><img src="img/Informe63-2019-Contabilidad_003.jpeg" width="560" alt="informa63_2019_contabilidad003"/></div>
														<div class="text-center"><img src="img/Informe63-2019-Contabilidad_004.jpeg" width="560" alt="informa63_2019_contabilidad004"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">BALANCE HASTA EL 30 DE JUNIO</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<div class="text-center"><img src="img/balance_01.jpeg" width="560" alt="balance_01"/></div>
														<div class="text-center"><img src="img/balance_02.jpeg" width="560" alt="balance_02"/></div>
														<div class="text-center"><img src="img/balance_03.jpeg" width="560" alt="balance_03"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">ASAMBLE GENERAL</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<div class="text-center"><img src="img/asamblea.jpeg" width="560" alt="asamblea"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">COMUNICADO</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<div class="text-center"><img src="img/comunicadoCPMP.jpeg" width="560" alt="diaDelPadre"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Plana administrativa</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/planaAdministrativa.png" width="560" alt="diaDelPadre"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Día del Padre</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/diaDelPadre.jpeg" width="560" alt="diaDelPadre"/></div>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Balance trimestral - primer periodo</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<p>Presentamos el balance trimestral con respecto al primer periodo.</p>
														<div class="text-center"><img src="img/balanceTrimestral1_01.jpeg" width="560" alt="balanceTrimestral1_01" class="fa-rotate-90"/></div>
														<div class="text-center"><img src="img/balanceTrimestral1_02.jpeg" width="560" alt="balanceTrimestral1_02"/></div>
														<p><small>*Por problemas técnicos de nuestra página web se demoró la publicación.</small></p>
												</div>
											</div>
										</div><!--// .toggle-container end-->
									</div><!-- div one created ends here -->
									<div class="clearfix">
										<div class="toggle-container">
											<div class="toggle-header">
												<div class="toggle-link toggle-open">Amazonas - Cross Training</div>
											</div>
											<div class="toggle-content">
												<div class="pad_top20 clearfix">
														<!--<h4>La final de la UEFA Champions League</h4>-->
														<div class="text-center"><img src="img/amazonas_001.jpeg" width="560" alt="amazonas_001"/></div>
														<div class="text-center"><img src="img/amazonas_002.jpeg" width="560" alt="amazonas_002"/></div>
														<div class="text-center"><img src="img/amazonas_003.jpeg" width="560" alt="amazonas_003"/></div>
														<div class="text-center"><img src="img/amazonas_004.jpeg" width="560" alt="amazonas_004"/></div>
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
														<div class="text-center"><img src="img/partidoPeruColombia.jpeg" width="560" alt="comunicado_001"/></div>
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
														<div class="text-center"><img src="img/comunicado_001.jpeg" width="560" alt="comunicado_001"/></div>
														<div class="text-center"><img src="img/comunicado_002.jpeg" width="560" alt="comunicado_001"/></div>
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
														<div class="text-center"><img src="img/volante_20190601.png" width="560" alt="La final de la UEFA Champions League"/></div>
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
<div id="convocatoria">
    <div id="lightbox2" class="lightbox modal fade" tabindex="-1" role="dialog" aria-labelledby="convocatoria" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><img src="{{ url('img/close.png') }}" alt=" "></button>
                <div class="modal-body">
                    <div class="spimg">
                        <img src="{{ url('img/convocatoriaDeAuditoriaFB.png') }}" alt="convocatoriaDeAuditoriaFB">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mbalance01">
    <div id="balance01" class="lightbox modal fade" tabindex="-1" role="dialog" aria-labelledby="mbalance01" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><img src="{{ url('img/close.png') }}" alt=" "></button>
                <div class="modal-body">
                    <div class="spimg">
                        <img src="{{ url('img/balance01.jpg') }}" alt="balance01">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mbalance02">
    <div id="balance02" class="lightbox modal fade" tabindex="-1" role="dialog" aria-labelledby="mbalance02" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><img src="{{ url('img/close.png') }}" alt=" "></button>
                <div class="modal-body">
                    <div class="spimg">
                        <img src="{{ url('img/balance02.jpg') }}" alt="balance02">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var routes = {
        'cargarComunicados': "{{ route('AyudaController/cargarComunicados') }}"
    };
</script>
@endsection