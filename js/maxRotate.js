var angleC    = 15;  // Угол поворота головы (градусы)
var angleHome = 0;  // Угол поворота изначальный

setInterval(function () {
    /*d = new Date;
    angleMin = (d.getMinutes() * 6);
    angleHour = ((d.getHours() * 5 + d.getMinutes() / 12) * 6);*/
    
    $("#divCowHead").rotate({
        duration: 3000,
        angle: angleHome,
        animateTo: angleC,
        callback: head2home
    })

}, 16000); //60000

function head2home()
{
    $("#divCowHead").rotate({
        duration: 1000,
        angle: angleC,
        animateTo: angleHome,
        callback: function () {$("#divCowHead").stopRotate()}
    });
}