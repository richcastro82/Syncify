<div class="form-group">
    <?php if(isset($label)): ?>
    <label><?php echo e($label); ?></label>
    <?php endif; ?>

    <div class="input-group myColorPicker">

        <input type="text" class="form-control colorpicker-full"  name="<?php echo e(@$name); ?>" value="<?php echo e(@${@$name}); ?>">

    </div>
</div>
<?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/resources/views/admin/partials/color-picker.blade.php ENDPATH**/ ?>