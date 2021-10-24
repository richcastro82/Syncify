<?php echo $__env->make('admin.partials.text-input',['name'=>'heading','label'=>__('te.heading')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.textarea',['name'=>'description','label'=>__lang('description')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $options =[];
    foreach(\App\Course::latest()->limit(1000)->get() as $course){
        $options[$course->id] = $course->name;
    }
?>

<?php echo $__env->make('admin.partials.select-multiple',['name'=>'courses','label'=>__('default.courses'),'options'=>$options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/fox/options/featured-courses/form.blade.php ENDPATH**/ ?>