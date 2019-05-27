@extends('layouts.app')

@section('title', 'Inicio')

@section('contenido')
<div id="about" class="item">
	<div class="aboutbg img-overlay"></div>
    <div class="content">
        <div class="content_overlay"></div>
        <div class="content_inner">
            <div class="row contentscroll">
                <div class="container col-md-12">
                    <div class="col-md-6 empty">&nbsp;</div>
                    <div class="col-md-6 content_text">
                        <h1>Sobre Nosotros</h1>
                        <div class="clearfix pad_top13">
                            <div class="col-md-6">
                                <p class="row">
                                    <span class="bold">Nos especializamos en realizar eventos en nuestros centros de esparcimiento.</span>
                                    <br/><br/>
                                    Nuestros equipos altamente calificados se asegurarán que tus eventos sean inolvidables.
                                    <br /><br />
                                    Contamos con 3 centros de esparcimiento que se ubican en Casuarinas, Santa María y Chosica.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="right_content ">
                                    <div class="sub_title">
                                        <h4>Opening hours:</h4>
                                    </div>
                                    <div class="hour_table">
                                        <table>
                                            <tr>
                                            <td class="days">mon - Fri</td>
                                            <td>9:00am - 4:00pm</td>
                                            </tr>
                                            <tr>
                                            <td class="days">Sat</td>	
                                            <td>9:00am - 2:00pm</td>		
                                            </tr>
                                            <tr>
                                            <td class="days">Sun</td>	
                                            <td>8:30am - 1:00pm</td>		
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="sub_title">
                                        <h4>book your table:</h4>
                                    </div>
                                    <p>We welcome walk-in guests,online at<br/><br><a class="button nav-link" href="contactform.htm">Book table</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection