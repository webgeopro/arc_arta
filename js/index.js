$("document").ready(function () {
    $('#ulSubMenu a').click(function(){
        $('#indexContent').load('/site/getPage',{pageLabel:$(this).attr('name')});
        return false;
    });
    $('#logo').click(function(){
        location.href = '/';
    });
    setTimeout('musicListen()', 5000);
});
function musicListen()
{
    $("#page").find('audio')[0].play();
    //$("#divMusicBox").html('<embed autostart="true" loop="false" src="/uploads/cow.wav" hidden="true" type="audio/wav"></EMBED>');
}
/* <audio autoplay="autoplay"><source src="uploads/cow.mp3" type="audio/mpeg"></audio> */