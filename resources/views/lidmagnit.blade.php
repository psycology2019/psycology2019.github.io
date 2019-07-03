 @extends('layouts.base')
 @section('content')
<header>
	 <div class="header_title header_consult">
	  <h1>Программа 5-ти шагов</h1>	
	 </div>	
	</header> 
    <section style="background-color: #ffffff;">
	  <div class='block_indent lid_page'>
	   <p id="hidtxt" class="color_txt">За улучшение отношений в паре отвечает обе стороны, но кто-то обычно находится на полшага впереди. И раз Вы читаете этот текст, то именно Вы отвечаете за то, чтобы сделать первый шаг навстречу.</p>
	   <p>Когда отношения в паре превращаются в проблему, они приносят с собой много переживаний, душевной боли, конфликтов и сложностей. Каждая из сторон переживает психоэмоциональный стресс и, вполне понятно, испытывает желание как можно скорее от него избавиться. Хочется улучшить отношения, перезагрузить их или завершить, но с наименьшими негативными последствиями.</p>
       <p>К сожалению, стресс имеет коварные свойства «отключать» наше логическое мышление и интуицию, искажать чувства и восприятие реальности. Он часто заставляет нас бессознательно выбирать неэффективные стратегии поведения, которые, в итоге, так и не приводят к нужному результату. </p>
	   <p id='bold_text'>Эти стратегии можно условно разделить на 2 вида:</p>
	   <ul>
	     <li>Фиксация на проблеме</li>
		 <li>Фиксация на цели</li>
	   </ul>
	   <p id="smalltxt">*Фиксация, в данном контексте, означает существующую направленность внимания человека (его психики, чувств, мышления и поведения).</p>
	   <div class="row lid_inf" >
	     <div class="col-md-6" >
	       <p class="color_txt"  id='txtcntr'>Стратегия «Фиксация на проблеме» </p>
		   <img class="center" src='media/img/lid1.png'>
		   <p>Сталкиваясь с проблемой в отношениях, большая часть внимания и внутренней энергии человека поглощены проблемой.  </p>
			<ul>Последствия: 
			<li>Застраивание в негативном мышлении, внутренних диалогах, самокопании.
			<li>Залипание в негативных эмоциях. </li>
			<li>Накопление нерешенных проблем. </li>
			<li>Состояние бессилия, апатия, бездействие, пассивность. </li>
			<li>Непонимание своих желаний. </li>
			<li>Повышенная тревожность, раздражительность. </li>
			<li>Бессонница, психосоматика. </li>
			</ul>		 
		 </div>		
	     <div class="col-md-6" >
	       <p class="color_txt" id='txtcntr'>Стратегия «Фиксация на цели» </p>
		   <img class="center" src='media/img/lid2.png'>
		   <p>Сталкиваясь с проблемой в отношениях, человек бежит от них. Большая часть его внимания и внутренней энергии поглощены новыми целями.  </p>
			<ul>Последствия: 
			<li>Непостоянство.
			<li>Обесценивание чувств других людей, отсутствие эмпатии. </li>
			<li>Временное облегчение,  стремление к ложным целям. </li>
			<li>Накопление нерешенных проблем. </li>
			<li>Отсутствие удовлетворенности. </li>
			<li>Тревожность. </li>
			<li>Разочарование. </li>
			<li>Повторяющиеся проблемы. </li>
			<li>Ощущение бессмысленности. </li>
			</ul>	     
		 </div>
		</div>
        <!--<p id="hidtxt" class="color_txt">Итог:  Мы снова наступаем на старые «грабли», накапливаем нерешенные проблемы в отношениях, не знаем чего хотим, не видим решения.</p>
		<ul>Следуя программе 5-ти шагов, Вы непременно сможете: 
		  <li>Прервать порочный круг токсичных отношений. </li>
		  <li>Определить реальные причины существующих проблем в паре. </li>
		  <li>Перезагрузить партнерские отношения и значительно их улучшить</li>
		  <li>Построить отношения, которые будут Вас радовать. </li>
		</ul>		  
	 </div> -->
	 		  <p id="txtcntr">Знакомо, не так ли?</p>
		  <p id="txtcntr">Хотите узнать, как выйти из замкнутого круга проблем и построить долгие и счастливые отношения?</p>
	<div class="button_lesson">
	
			<center>
			<a href="" class="ripple btn_lesson" data-toggle="modal" data-target="#LidModal">ХОЧУ!</a>
						 <p>Получить в подарок программу<br>
               «5 шагов к отношениям, которые радуют»</p>
			</center>
         </div>	
	<!-- Modal -->

	<div class="modal fade" id="LidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<center>
					<h4 class="modal-title" id="exampleModalLabel">Введите Ваши данные, что бы получить в подарок программу <br>«5 шагов к отношениям, которые радуют» </h4>
					</center>
				</div>
				<div class="modal-body">
<!--						    <script>
        

        function checkForm(form)
        {
     if (document.getElementById('InputName').value==""){
	    document.getElementById('err_name').innerHTML='Введите имя';
	        return false;
	    }
	    else {
	    document.getElementById('err_name').innerHTML="";
	    };
	    if (document.getElementById('InputEmail').value==""){
	    document.getElementById('err_email').innerHTML='Введите email';
	        return false;
	    }
	    else {
	    document.getElementById('err_email').innerHTML="";
	    };
	    return true;
        }

    function btnClick()
        {
     if (document.getElementById('InputName').value==""){
	    document.getElementById('err_name').innerHTML='Введите имя';
	        return false;
	    }
	    else {
	    document.getElementById('err_name').innerHTML="";
	    };
	    if (document.getElementById('InputEmail').value==""){
	    document.getElementById('err_email').innerHTML='Введите email';
	        return false;
	    }
	    else {
	    document.getElementById('err_email').innerHTML="";
	    };
	    return alert("Спасибо!");
        }
			
        }    
    </script>		-->			
					<form name="lidmagnit" id="2" method="post" action="{{asset('/lidmagnit')}}" enctype="multipart/form-data">	
					{!!csrf_field()!!}
						<div class="form-group">
							<label for="name">Ваше имя:</label>
							<div id='err_name' class='error'></div>
							<input type="name" name="name" class="form-control" id="InputName" required  placeholder="Введите имя">
							
						</div>
						<div class="form-group">
							<label for="email">Ваш E-mail:</label>
							<input type="email" name="email" class="form-control" id="InputEmail" required placeholder="Введите email">
							<div id='err_email' class='error'></div>
						</div>
						<div class="form-group">
							<label for="phone">Ваш телефон:</label>
							<input type="phone"  name="phone" class="form-control" id="InputPhonel"  placeholder="Введите номер телефона">
						</div>
						<div class="form-group form-check">
						   <label class="form-check-label">
							<input type="checkbox" class="form-check-input" checked> Я выражаю согласие на обработку персональных данных согласно <a href="{{asset('confedencialnost')}}">политике конфиденциальности</a>
						  </label>
					    </div>
						<hr>
						<button type="submit" class="btn btn-primary btn-lg center-block" onClick="btnClick();">Получить подарок</button>

					<!--<form name="Lidmagnit_form" id="Lidmagnit_form" action="{{asset('/lidmagnit')}}" method="post" onsubmit="return validate(this);">
						{!!csrf_field()!!}
						<div class="form-group">
							<label for="name">Ваше имя:</label>
							<input id="name" class="form-control" name="name" type="text" placeholder="Иван">
						</div>
						<div class="form-group">
							<label for="email">Ваш E-mail:</label>
							<input id="email" class="form-control" name="email" required type="text" placeholder="ivanov@email.com">
						</div>
						<div class="form-group">
							<label for="phone">Ваш телефон:</label>
							<input id="phone" class="form-control" name="phone" required type="text">
						</div>
						<div class="form-group form-check">
							<input id="check" class="form-check-input" checked type="checkbox"><label class="form-check-label" for="check">Я выражаю согласие на обработку персональных данных согласно <a href="confedencialnost.html">политике конфиденциальности</a></label>
						</div>
						<button id="button" class="btn btn-success center-block" type="submit">Получить подарок!</button> -->
						<div class="result">
							<span id="answer"></span>
							<span id="loader" style="display:none"><img src="images/loader.gif" alt=""></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
		</div>
    </section>	
 @endsection