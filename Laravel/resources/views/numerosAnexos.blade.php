@extends('layouts.app')

@section('title', 'Redes Sociales')

@section('contenido')
<div id="about" class="item fullwidth">
	<div class="full-width img-overlay"></div>
    <div class="content">
        <div class="content_overlay_fullwidth"></div>
        <div class="content_inner">
            <div class="row contentscroll">
                <div class="container">
                    <div class="col-md-12 content_text">
                        <h1>Contáctanos</h1>
                        <div class="clearfix pad_top13">
                            <div class="col-md-12">
                                <p>Si deseas obtener más información puedes llamarnos a los teléfonos de abajo o escribirnos a nuestro correo.<br/><br/></p>
                            </div>
                            <div class="col-md-7">
                                <div class="row ">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="sub_title">
                                            <h4>Casuarinas</h4>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 344-4100</div>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Anexo</th>
                                                    <th>Área/Cargo/Personal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>103</td>
                                                    <td>Asistente de Eventos 1</td>
                                                </tr>
                                                <tr>
                                                    <td>104</td>
                                                    <td>Asistente de Eventos 2</td>
                                                </tr>
                                                <tr>
                                                    <td>108</td>
                                                    <td>Atención al Asociado.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="sub_title">
                                            <h4>Santa María</h4>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 430-7528</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="sub_title">
                                            <h4>Chosica</h4>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 360-3148</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="contactform"></div>
                                    <div class="content">
                                        <div class="row contentscroll">
                                            <div class="container col-md-12">
                                                <div class="col-md-12 content_text">
                                                    <div id="contactforms">
                                                        <h1>Escríbenos</h1>
                                                        <form id="contact_form" class="cont_form pad_top13" action="mailto:informatica@clubaopip.com" method="post" enctype="text/plain">
                                                            <p>Si quieres saber sobre reservas, eventos y otras consultas puedes escribirnos y te responderemos.</p>
                                                            <div class="clearfix cont_form pad_top20"> 
                                                                <input type="text" name="name" class="validate['required'] textbox1" placeholder="* Nombre : " onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Nombre :'" disabled/>
                                                                <input type="text" name="email" class="validate['required','email']  textbox1" placeholder="* Correo : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Correo :'" disabled/>
                                                                <input type="text" name="phone" class="validate['required','phone']  textbox1" placeholder="* Teléfono : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Teléfono :'" disabled/>
                                                                <textarea name="message" class="validate['required'] messagebox1" placeholder="* Mensaje : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Mensaje :'" disabled></textarea>
                                                                <input id="contactsubmitBtn1" value="enviar" name="Confirm" type="submit" class="submitBtn" disabled/>
                                                            </div>
                                                        </form>
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
            </div>
        </div>
    </div>
</div>
@endsection