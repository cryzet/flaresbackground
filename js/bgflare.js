window.onload = function() {
    document.onmousemove = getPosition;
};
function getPosition(e){
    var documentH = document.documentElement.clientHeight/2;
    var documentW = document.documentElement.clientWidth/2;
    var posicionX = (e.clientX);
    var posicionY = (e.clientY);
    var posicionX1 = posicionX - documentW/2;
    var posicionY1 = posicionY - documentH/2;
    var nodoCoordenadas = document.getElementById('coordenadas');
    var nodoCoordenadas2 = document.getElementById('coordenadas2');
    var dimensiones = document.getElementById('dimensiones');
    var capa1 = document.getElementById('cap_1');
    var capa2 = document.getElementById('cap_2');
    var capa3 = document.getElementById('cap_3');
    var capa4 = document.getElementById('cap_4');
    //nodoCoordenadas.innerHTML = 'X: ' + posicionX + ';  Y: ' + posicionY;
    //nodoCoordenadas2.innerHTML = 'X: ' + posicionX1 + ';  Y: ' + posicionY1;
    //dimensiones.innerHTML = 'Ancho: ' + documentW + ';  Alto: ' + documentH;

    capa1.setAttribute('style','position: absolute; top:'+posicionY1+'px; left:'+posicionX1+'px;transition: 30s');
    capa2.setAttribute('style','position: absolute; top:'+posicionY1+'px; left:'+posicionX1+'px;transition: 40s');
    capa3.setAttribute('style','position: absolute; top:'+posicionY1+'px; left:'+posicionX1+'px;transition: 60s');
    capa4.setAttribute('style','position: absolute; top:'+posicionY1+'px; left:'+posicionX1+'px;transition: 70s');
}