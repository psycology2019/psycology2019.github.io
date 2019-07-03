 @extends('layouts.base')
 @section('content')
<header>
	 <div class="header_title header_release">
	  <h1>Индивидуальный терапевтический<br>он-лайн курс «Освобождение»</h1>	
	 </div>	
	</header> 
    <section style="background-color: #efefef;" class='program_release' >
      <div class="row" >
	    <div class="col-md-6" >
		  <img src="media/img/consl_program/program_release.PNG" alt="он-лайн курс «Освобождение»">
		</div>
		<div class="col-md-6 realese_bl_txt" >
		  <p>Это практический, трансформационный курс, результат моего многолетнего труда и личного опыта. </p>
		  <p>Название курса говорит само за себя. Это глубокая работа по освобождению человека из ловушек проблем и страданий через определенные этапы осознания, понимания и принятия самого себя. </p>
		  <p>Это авторский курс, соединивший в себе глубинные принципы Эннеаграммы, законы семейной системной терапии и практики осознанности. </p>
		  <p>Читайте отзывы о программе в разделе <a class="page-scroll" href="{{asset('revies')}}">ОТЗЫВЫ</a>.</p>
		</div>
	 </div>		
	  <div class='block_indent'>
	  	 <div class="row realese_bl_inf" >
	     <div class="col-md-6" >
		   <p id='bold_text'>Программа индивидуального онлайн курса «Освобождение»</p>  
		     <ul class="accordion">
				<li>
					<a>1 ЭТАП</a>
					<p>1 встреча<br>Первичная консультация. Знакомство. Прояснение клиентского запроса. Предварительная диагностика. Рекомендации.</p>
				</li>
			<li>
				<a>2 ЭТАП </a>
				<p>6 встреч <br>
					Прояснение и анализ проблемных сфер Вашей жизни. Типирование личности и глубинная диагностика Вашего эннеа-типа. Определение ведущих личностных аспектов, сильных и слабых Ваших сторон, базовых потребностей, деструктивных стратегий, энергетических "вирусов" и пр. Рекомендации по трансформации.
				</p>
			</li>
			<li>
				<a>3 ЭТАП </a>
				<p>3 встречи<br>
					Трансформационные программы: работа с геннограммой, родовыми сценариями, не прожитыми чувствами, травмами, страхами, упражнения и медитации,  расстановки. 
				</p>
			</li>
		</ul> <!-- / accordion -->	
		 </div>
		 <div class="col-md-6 release_bl" >
		 <p>+ Нумерологический расчет в подарок (в качестве дополнительного метода)</p>
		<p><span id='bold_text'>Длительность курса:</span><br> 10 онлайн встреч, более 10 часов интенсивной трансформационной работы.  </p>
        <p><span id='bold_text'>Стоимость курса: </span> 10тыс P </p>
		 </div>
	 </div>
	 
	
<script>

(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);


	</script>			

		<div class="button-parent">	
			<a href="#" class="button7" data-toggle="modal" data-target="#exampleModal">Купить</a>
		</div>
	  </div>
    </section>	
 @endsection