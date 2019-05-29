@extends('layouts.app')

@section('title', 'Nosotros')

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
                                <br /><br />
                                <div class="left_content ">
                                    <div class="sub_title">
                                        <h4>¿Quieres saber más?</h4>
                                    </div>
                                    <p>La asociación se creó en el año 1972... ¿te cuento más?<br/><br/><a class="button nav-link" href="/NosotrosMas">Sí, cuéntame más</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right_content ">
                                    <div class="sub_title">
                                        <h4>Horarios de atención:</h4>
                                    </div>
                                    <div class="sub_title">
                                        <h5>Casuarinas</h5>
                                    </div>
                                    <div class="hour_table">
                                        <table>
                                            <tr>
                                            <td class="days">LUN - DOM</td>
                                            <td>9:00am - 5:00pm</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="sub_title">
                                        <h5>Santa María</h5>
                                    </div>
                                    <div class="hour_table">
                                        <table>
                                            <tr>
                                            <td class="days">MAR - DOM</td>
                                            <td>9:00am - 5:00pm</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="sub_title">
                                        <h5>Chosica</h5>
                                    </div>
                                    <div class="hour_table">
                                        <table>
                                            <tr>
                                            <td class="days">MAR - DOM</td>
                                            <td>9:00am - 5:00pm</td>
                                            </tr>
                                        </table>
                                    </div>
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