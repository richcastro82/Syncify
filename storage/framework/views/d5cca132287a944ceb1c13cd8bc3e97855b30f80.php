<?php echo $__env->make('admin.partials.text-input',['name'=>'email','label'=>__t('email')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.text-input',['name'=>'telephone','label'=>__lang('telephone')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.color-picker',['name'=>'bg_color','label'=>__('te.background-color')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.color-picker',['name'=>'font_color','label'=>__('te.font-color')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.select',['name'=>'cart','label'=>__t('cart-button'),'options'=>array('1'=>__('default.enabled'),'0'=>__('default.disabled'))], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<h5><?php echo app('translator')->get('te.social'); ?></h5>
<?php echo $__env->make('admin.partials.color-picker',['name'=>'social_bg_color','label'=>__t('social_background-color')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<hr>
<?php $__currentLoopData = ['facebook','twitter','instagram','youtube','linkedin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('admin.partials.text-input',['name'=>'social_'.$value,'label'=>ucfirst($value)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








<?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/education/options/top-bar/form.blade.php ENDPATH**/ ?>