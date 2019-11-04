@extends('layouts.admin')

@section('title', 'Menú Casuarinas')

@section('contenido')
<!-- Page -->
<div class="page">
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Calendario del menú en Casuarinas</h3>
            </div>
            <div class="panel-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group form-material">
                                <label for="ano">Año</label> 2019
                                <!--<select name="ano" id="ano"></select>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group form-material">
                                <label for="semana">Semana</label>
                                <select name="semana" id="semana"></select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <!-- LUNES -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Lunes DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxLunEntrada" name="chkbxLunEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxLunFondo" name="chkbxLunFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxLunRefresco" name="chkbxLunRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxLunPostre" name="chkbxLunPostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxLunAdicional" name="chkbxLunAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- MARTES -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Martes DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMarEntrada" name="chkbxMarEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMarFondo" name="chkbxMarFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMarRefresco" name="chkbxMarRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMarPostre" name="chkbxMarPostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMarAdicional" name="chkbxMarAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- MIERCOLES -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Miércoles DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMieEntrada" name="chkbxMieEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMieFondo" name="chkbxMieFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMieRefresco" name="chkbxMieRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMiePostre" name="chkbxMiePostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxMieAdicional" name="chkbxMieAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- JUEVES -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Jueves DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxJueEntrada" name="chkbxJueEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxJueFondo" name="chkbxJueFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxJueRefresco" name="chkbxJueRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxJuePostre" name="chkbxJuePostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxJueAdicional" name="chkbxJueAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- VIERNES -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Viernes DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxVieEntrada" name="chkbxVieEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxVieFondo" name="chkbxVieFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxVieRefresco" name="chkbxVieRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxViePostre" name="chkbxViePostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxVieAdicional" name="chkbxVieAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- SABADO -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Sábado DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxSabEntrada" name="chkbxSabEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxSabFondo" name="chkbxSabFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxSabRefresco" name="chkbxSabRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxSabPostre" name="chkbxSabPostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxSabAdicional" name="chkbxSabAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- DOMINGO -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="wrap">
                            <h4 class="title">Domingo DD</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxDomEntrada" name="chkbxDomEntrada" checked="">
                                                <label for="inputCheckbox">Entrada</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxDomFondo" name="chkbxDomFondo" checked="">
                                                <label for="inputCheckbox">Fondo</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxDomRefresco" name="chkbxDomRefresco" checked="">
                                                <label for="inputCheckbox">Refresco</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxDomPostre" name="chkbxDomPostre" checked="">
                                                <label for="inputCheckbox">Postre</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="chkbxDomAdicional" name="chkbxDomAdicional" checked="">
                                                <label for="inputCheckbox">Adicional</label>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reiniciar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
    var routes = {
        'cargarSemanasPorAno': "{{ route('AyudaController/cargarSemanasPorAno') }}"
    };
</script>
<!-- End Page -->
@endsection