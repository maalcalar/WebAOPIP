'use strict';

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

var xhttp = new XMLHttpRequest();
function imprimirSemanas(xhttp)
{
    var semanas= JSON.parse(xhttp.responseText);
    ReactDOM.render(e(optionsSemana, {semanas: semanas}), selectSemana);
}

function cargarSemanasPorAno(anio = new Date().getFullYear(), cb){
    var request = {
        ano: anio
    };

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cb(this);
        }
    };

    xhttp.open("POST", routes.cargarSemanasPorAno, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
    xhttp.send("ano="+anio);
}
cargarSemanasPorAno(2019, imprimirSemanas);