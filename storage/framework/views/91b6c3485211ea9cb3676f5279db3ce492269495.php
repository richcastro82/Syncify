<?php echo $__env->make('admin.partials.text-input',['name'=>'heading','label'=>__('te.heading')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.partials.textarea',['name'=>'description','label'=>__lang('description')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $options =[];
    foreach(\App\Admin::where('public',1)->limit(1000)->get() as $admin){
        $options[$admin->id] = $admin->user->name.' '.$admin->user->last_name;
    }
?>
<?php echo $__env->make('admin.partials.select-multiple',['name'=>'instructors','label'=>__('default.instructors'),'options'=>$options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/fox/options/instructors/form.blade.php ENDPATH**/ ?>