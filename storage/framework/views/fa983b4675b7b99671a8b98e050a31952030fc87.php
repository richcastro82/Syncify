
<?php echo $__env->make('admin.partials.color-picker',['name'=>'bg_color','label'=>__('te.background-color')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.color-picker',['name'=>'font_color','label'=>__('te.font-color')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.select',['name'=>'order_button','label'=>__t('order-button'),'options'=>array('1'=>__('default.enabled'),'0'=>__('default.disabled'))], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/fox/options/top-bar/form.blade.php ENDPATH**/ ?>