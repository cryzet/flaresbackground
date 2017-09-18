window.onload = function() {
    document.onmousemove = getPosition;
};
function getPosition(e){
    var posicionX = -(e.clientX);
    var posicionY = -(e.clientY);
    var nodoCoordenadas = document.getElementById('coordenadas');
    var capa1 = document.getElementById('cap_1');
    var capa2 = document.getElementById('cap_2');
    var capa3 = document.getElementById('cap_3');
    var capa4 = document.getElementById('cap_4');
    nodoCoordenadas.innerHTML = 'Posicion x: ' + posicionX + ';  Posicion y: ' + posicionY;

    capa1.setAttribute('style','position: absolute; top:'+posicionY/50+'px; left:'+posicionX/50+'px;');
    capa2.setAttribute('style','position: absolute; top:'+posicionY/100+'px; left:'+posicionX/100+'px;');
    capa3.setAttribute('style','position: absolute; top:'+posicionY/150+'px; left:'+posicionX/150+'px;');
    capa4.setAttribute('style','position: absolute; top:'+posicionY/200+'px; left:'+posicionX/200+'px;');
}