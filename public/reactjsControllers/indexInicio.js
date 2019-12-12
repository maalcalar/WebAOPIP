(function(){
    'use strict';

    class Comunicado extends React.Component {
        render() {
            return (
            <div className="clearfix">
                <div className="toggle-container">
                    <div className="toggle-header">
                        <div className="toggle-link toggle-open">Título</div>
                    </div>
                    <div className="toggle-content">
                        Texto
                        <div className="row">
                            <div className="col-xs-6">
                            </div>
                            <div className="col-xs-6 text-right">
                                <p className="help-block"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            );
        }
    }

    class Comunicados extends React.Component {
        render() {
            return (
                <div className="content_overlay">
                    <h1 className="text-center">Comunicados</h1>
                    <div className="content_text contentscroll">
                        <Comunicado />
                    </div>
                </div>
            );
        }
    }

    //ReactDOM.render(<Comunicados />, document.getElementById('root'));
})();

/*'use strict';

const e = React.createElement;

class optionSemana extends React.Component {
    render(){
        return e(
            'option',
            {value: this.props.semana},
            this.props.semana + " [" + this.props.fecha_inicio + " - " + this.props.fecha_fin + "] "
        );
    }
}

class optionsSemana extends React.Component {
    render(){
        //return this.props.semanas.map(function(s){ e(optionSemana, {semana: s.semana, fecha_inicio: s.fecha_inicio, fecha_fin: s.fecha_fin}) });
        return this.props.semanas.map(s => e(optionSemana, {semana: s.semana, fecha_inicio: s.fecha_inicio, fecha_fin: s.fecha_fin}) );
    }
}

const selectSemana = document.querySelector('#semana');

function imprimirComunicados(xhttp)
{
    var comunicados= JSON.parse(xhttp.responseText);
    ReactDOM.render(e(optionsSemana, {semanas: semanas}), selectSemana);
}

var xhttp = new XMLHttpRequest();

function cargarComunicados(cb){
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cb(this);
        }
    };

    xhttp.open("GET", routes.cargarComunicados, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
}
cargarComunicados(imprimirSemanas);*/