$(document).ready(function () {
    $('form').submit(function () {
        event.preventDefault();
        var formID = $(this).attr('id'); // Получение ID формы
        var form = $('#' + formID);
		var adress = $(this).attr('action');

        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            // метод отправки
            type: "POST",
            // путь до скрипта-обработчика
            url: adress,
            // какие данные будут переданы
            data: form.serialize(),
            // тип передачи данных
            dataType: "json",
            // действие, при ответе с сервера
            success: function(data){
                // в случае, когда пришло success. Отработало без ошибок
                if(data.result == 'success'){
                    alert(data.post);
					$(".modal").modal("hide");//закрыть модальное окно
                }else{
                    // вывод сообщения об ошибке
                    alert("Ошибка");
                }
            }
            //ajax
        });

 //submit
    });	
	$(document).mousemove(function(event) {
	//elem.innerHTML = event.clientX + ' : ' + event.clientY;
	if ( event.clientY < 10) {
	$("#lid").animate({top: "0"}, 500 );
	};
		
});
	$("#lid_off").click(function() {
		
	$("#lid").animate({top: "-300"}, 500 );
	
	
});	
	

//redy
});
