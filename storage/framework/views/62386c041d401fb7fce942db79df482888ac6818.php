﻿ 
 <?php $__env->startSection('content'); ?>
	<header class="header_page">
	 <div class="header_title header_consult">
	  <h1>Отзывы</h1>	
	 </div>
	</header>
    <section>	
	  <div class="block_indent">
	
	
    <?php $__currentLoopData = $feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feeds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	   <div class="reviews">
	   <p id="bold_text"><?php echo $feeds->name; ?></p>
	   <p><?php echo $feeds->body; ?></p>
	   <hr class="hr_st">
      </div>	
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <script>
        
        function btnClick()
        {
            var Txt1 = "";
            Txt1 = document.feedback.InputName.value;
           // document.getElementById('mes').innerHTML="<HR>"+
           //     "Спасибо " + Txt1.bold() +
            //    " ! Ваш отзыв важен для меня!""<HR>";
			alert("Спасибо " + Txt1.bold() +" ! Ваш отзыв важен для меня!")
        }
        
    </script>
     <div class="revies_form">
	 <div id="mes"></div>
	 <p class="bl_title">Оставьте свой отзыв</p>
		  <form NAME="feedback" method="post" action="<?php echo e(asset('/revies')); ?>">	
		    <?php echo csrf_field(); ?>

		   <div class="form-group">
			<input type="name" name="name" class="form-control" id="InputName" required placeholder="Введите имя">
		   </div>
		   <div class="form-group">		  
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" required placeholder="Введите email">
		   </div>
		   <div class="form-group">		  
			<input type="phone"  name="phone" class="form-control" id="exampleInputPhonel1" required placeholder="Введите номер телефона">
		   </div>
		   <div class="form-group">
			 <textarea class="form-control" name="body" rows="5" required placeholder="Введите отзыв"></textarea>
		   </div>
		   <div class="checkbox">
			<label>
			 <input type="checkbox" checked> Я выражаю согласие на обработку персональных данных согласно <a href="<?php echo e(asset('confedencialnost')); ?>">политике конфиденциальности</a>
			</label>
		   </div>
	   
		   <button type="submit" class="btn btn-primary btn-lg center-block" onClick="btnClick();">Поделиться отзывом</button>
		  </form>
	 </div>  
	</div>
	</section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\site\resources\views/revies.blade.php ENDPATH**/ ?>