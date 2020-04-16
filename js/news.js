$("document").ready(function () {
    $('div.divNews a').click(function(){
        $.post(
    			"/site/getNews",
    			{newsID: this.name},
    			function (data) {
	                if (data['result'] == 'success') {
	                	// Обновляем
                        $('#tabNews .tdRight h4').html(data['date']);   // Дата
                        $('#tabNews .tdRight h3').html(data['title']);  // Заголовок
                        $('#tabNews .tdRight span').html(data['full']); // текст
	                } else {
	                    alert('Произошла ошибка. Попробуйте еще раз.');
	                }
	            },
        "json");
        
        return false;
    });
    $('_logo').click(function(){
        location.href = '/';
    });
});