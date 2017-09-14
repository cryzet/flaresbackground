window.onload = function() {
    document.getElementById('caja').onmousemove = mostrarPosicionPuntero;
};
function mostrarPosicionPuntero(e){
    var posicionX = e.clientX;
    var posicionY = e.clientY;
    var nodoCoordenadas = document.getElementById('coordenadas');
    var capa1 = document.getElementById('cap1');
    nodoCoordenadas.innerHTML = 'Posicion x: ' + posicionX + ';  Posicion y: ' + posicionY;

    capa1.setAttribute.style.top=posicionY+'px';
}