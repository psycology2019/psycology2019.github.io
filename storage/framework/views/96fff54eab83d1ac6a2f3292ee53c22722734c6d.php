 
 <?php $__env->startSection('content'); ?>
 <header class="header_page">
  <div class="tl_header">
   <h2>КОНТАКТЫ</h2>
   <p>Будем на связи</p>
  </div>
 </header>
 <section>
  <div class="info_contact block_indent">
   <div class="phone">
    <h3 class="bl_title">Телефон для связи:</h3>
	<a href="tel: +375296470479" title="Номер телефона">
	 <img src="media/img/contact/icons8-phone-40.png" alt="Phone" title="Phone">+375(29) 6470479</a><br>
    <a id="vb_pk" title="Viber" href="viber://chat?number=+375296470479">
	 <img src="media/img/contact/icons8-viber-48.png" alt="Viber" title="Viber"></a>
    <a id="vb_mb" title="Viber" href="viber://add?number=375296470479">
	 <img src="media/img/contact/icons8-viber-48.png" alt="Viber" title="Viber"></a>	
    <a title="WhatsApp" href="whatsapp://send?phone=+375296470479">
	 <img src="media/img/contact/icons8-whatsapp-48.png" alt="WhatsApp" title="WhatsApp"></a>	
    <p><img src="media/img/contact/icons8-mail-48.png" alt=" Почта mail" title=" Почта mail" style="display: inline-block;">128wings@mail.ru </p>	
   </div>
   
   <div class="adress">
	<h3 class="bl_title">АДРЕС КАБИНЕТА:</h3>
    <p id="txt">г. Минск, ул. Калиновского 68-А, каб.34<br> (600 м. от ст.метро "Восток")<p>   
	<div class="maps_room">
	 <div class="contact_maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.9596231829137!2d27.648784435064297!3d53.9390322601166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbceda6ecae1f9%3A0xaf7e790f9cfb6d92!2z0YPQu9C40YbQsCDQmtCw0LvQuNC90L7QstGB0LrQvtCz0L4gNjjQsCwg0JzQuNC90YHQuiAyMjAwODY!5e0!3m2!1sru!2sby!4v1552599399486" 
	         width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	 </div>
	</div>
   </div> 
   <div class="social social_contact">
    <h3 class="bl_title" style="margin-bottom: 5%">СМОТРИТЕ В СОЦ. СЕТЯХ</h3>
	<div class="wrapper wrapper_contact">
	  <ul>
	   <li class="facebook"><a href="<?php echo e(url('https://www.facebook.com/molodpsy')); ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
			<li class="vk"><a href="<?php echo e(url('https://vk.com/id173676978')); ?>"><i class="fa fa-vk fa-2x" ></i></a></li>
			<li class="instagram"><a href="<?php echo e(url('https://www.instagram.com/psycholog.molodyanova/?hl=ru')); ?>"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
			<li class="youtube"><a href="<?php echo e(url('https://www.youtube.com/channel/UCGEcYTurvJtKx1d83owYauw')); ?>"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>

	  </ul>
	</div>
   </div>

	<div class="form_contact">
	 <h3 class="bl_title">ЗАДАЙТЕ ВОПРОС</h3>
	  <form>	      
	   <div class="form-group">
		<input type="name" class="form-control" id="exampleInputName1" placeholder="Введите имя">
	   </div>
	   <div class="form-group">		  
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
	   </div>
	   <div class="form-group">		  
		<input type="phone" class="form-control" id="exampleInputPhonel1" placeholder="Введите номер телефона">
	   </div>
	   <div class="form-group">
		 <textarea class="form-control" rows="3" placeholder="Введите вопрос"></textarea>
	   </div>
	   <div class="checkbox">
		<label>
		 <input type="checkbox" checked> Я выражаю согласие на обработку персональных данных согласно <a href="confedencialnost.html">политике конфиденциальности</a>
		</label>
	   </div>
	   <button type="submit" class="btn btn-primary btn-lg center-block">Отправить вопрос</button>
	  </form>
	</div>  
  </div>
 </section> 
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\site\resources\views/contact.blade.php ENDPATH**/ ?>