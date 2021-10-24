<div class="form-group">
    <label for="<?php echo e(@$name); ?>"><?php echo e(@$label); ?></label>
    <?php echo e(Form::select(@$name, $options,@${@$name},['class'=>'form-control '.@$class])); ?>


</div><?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/resources/views/admin/partials/select.blade.php ENDPATH**/ ?>