@extends('layouts.app')

@section('title', 'Horarios')

@section('contenido')
<div id="about" class="item fullwidth">
	<div class="full-width img-overlay"></div>
    <div class="content">
        <div class="content_overlay_fullwidth"></div>
        <div class="content_inner">
            <div class="row contentscroll">
                <div class="container">
                    <div class="col-md-12 content_text">
                        <h1>Horarios de atención</h1>
                        <div class="clearfix pad_top13">
                            <div class='col-md-4'>
                                <div class="clearfix location_content">
                                    <div class="row col-md-8">
                                        <div class="location-address-wrap">
                                            <h3 class="border_bottom"><i class="fa fa-map-marker"></i>Casuarinas</h3>
                                            <div class="clearfix location-street">Av. Casuarinas 450<br />Santiago de Surco, Lima</div>
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 344-4100<br /><i class="fa fa-mobile"></i>+51 991-920-807</div>
                                            <!--<div class="clearfix location-cateringlink">On-Site catering is no longer available.  We offer carry-out in this location. </div>-->
                                        </div>
                                    </div>
                                    <div class="row col-md-4 location-btns">
                                        <div class="location map-link"><a class="button  nav-link" href="https://goo.gl/maps/uoKYW7aAxM22sTbo6" target="_blank">Google Maps</a></div>
                                        <!--<div class="location"><a class="button  nav-link" href="contactform.htm">Book A Table</a> </div>-->
                                    </div>
                                </div>
                                <div class="hour_table">
                                    <table>
                                        <tr>
                                        <td class="days">LUN - DOM</td>
                                        <td>9:00am - 5:00pm</td>
                                        </tr>
                                    </table>
                                </div>
                                <a class="button nav-link" href="/Sedes/Casuarinas">Ver Casuarinas</a></p>
                            </div>
                            <div class='col-md-4'>
                                <div class="clearfix location_content">
                                    <div class="row col-md-8">
                                        <div class="location-address-wrap">
                                            <h3 class="border_bottom"><i class="fa fa-map-marker"></i>Santa María</h3>
                                            <div class="clearfix location-street">Av. Miramar 105 Mz.D Lt.1_11<br />Santa María del Mar, Lima</div>
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 430-7528<br /><i class="fa fa-mobile"></i>+51 997-893-287</div>
                                            <!--<div class="clearfix location-cateringlink">On-Site catering is no longer available.  We offer carry-out in this location. </div>-->
                                        </div>
                                    </div>
                                    <div class="row col-md-4 location-btns">
                                        <div class="location map-link"><a class="button  nav-link" href="https://goo.gl/maps/iM1cipFais9mZoRH9" target="_blank">Google Maps</a></div>
                                        <!--<div class="location"><a class="button  nav-link" href="contactform.htm">Book A Table</a> </div>-->
                                    </div>
                                </div>
                                <div class="hour_table">
                                    <table>
                                        <tr>
                                        <td class="days">MAR - DOM</td>
                                        <td>9:00am - 5:00pm</td>
                                        </tr>
                                    </table>
                                </div>
                                <a class="button nav-link" href="/Sedes/Casuarinas">Ver Santa María</a></p>
                            </div>
                            <div class='col-md-4'>
                                <div class="clearfix location_content">
                                    <div class="row col-md-8">
                                        <div class="location-address-wrap">
                                            <h3 class="border_bottom"><i class="fa fa-map-marker"></i>Chosica</h3>
                                            <div class="clearfix location-street">Carretera Central km. 28.5<br />Lurigancho-Chosica, Lima</div>
                                            <div class="clearfix location-phone"><i class="fa fa-phone"></i>(01) 360-3148<br /><i class="fa fa-mobile"></i>+51 991-902-198</div>
                                            <!--<div class="clearfix location-cateringlink">On-Site catering is no longer available.  We offer carry-out in this location. </div>-->
                                        </div>
                                    </div>
                                    <div class="row col-md-4 location-btns">
                                        <div class="location map-link"><a class="button  nav-link" href="https://goo.gl/maps/DWmuoatpUbUA2SWJ6" target="_blank">Google Maps</a></div>
                                        <!--<div class="location"><a class="button  nav-link" href="contactform.htm">Book A Table</a> </div>-->
                                    </div>
                                </div>
                                <div class="hour_table">
                                    <table>
                                        <tr>
                                        <td class="days">LUN - DOM</td>
                                        <td>9:00am - 6:00pm</td>
                                        </tr>
                                    </table>
                                </div>
                                <a class="button nav-link" href="/Sedes/Casuarinas">Ver Chosica</a></p>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection