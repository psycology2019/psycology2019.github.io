 
 <?php $__env->startSection('content'); ?>
	<header class="header_page">
	 <div class="header_title header_consult">
	  <h1>Программы</h1>	
	 </div>
	</header>
    <section>
	<div class="block_indent prog">
	  <div class="row">
	    <div class="col-md-6 programs ">
		  <h2>Живые<br>тренинги и обучение</h2>
		  <img src="media/img/consl_program/progr12.png" alt="Живые тренинги и обучение" title="Живые тренинги и обучение">
		  <ul>
		    <li><a href="<?php echo e(asset('/program_family_ranking')); ?>">Семейные расстановки в Минске </a></li>
			<li>Лекторий проекта «Помогающая психология»</li>
			<li>Базовый обучающий курс по Эннеаграмме «Такое разное счастье»</li>
		  </ul>
		</div> 
	    <div class="col-md-6 programs ">
		  <h2>Онлайн<br>курсы и обучение</h2>
		  <ul>
		   <img src="media/img/consl_program/progr22.png" alt="Онлайн курсы и обучение" title="Онлайн курсы и обучение">
	       <li><a href="<?php echo e(asset('/program_release')); ?>">Индивидуальный терапевтический онлайн курс "Освобождение"</a></li>
		   <li>Трансформационный терапевтический онлайн курс «Отношения, которые радуют»</li>
		   <li>Онлайн обучающий курс для начинающих психологов и коучей «Как определить профессиональную нишу и начать практиковать»</li>
		 </ul>
		</div> 
	  </div>  
	</div>
	</section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\site\resources\views/program.blade.php ENDPATH**/ ?>