<?php $__env->startSection('page-title',__('default.contact-us')); ?>
<?php $__env->startSection('inline-title',__('default.contact-us')); ?>
<?php $__env->startSection('content'); ?>

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title"><?php echo app('translator')->get('default.get-in-touch-text'); ?></h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form_" action="<?php echo e(route('contact.send-mail')); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea required class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo e(addslashes(__t('enter-message'))); ?>'" placeholder=" <?php echo e(__t('enter-message')); ?>"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required  class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo e(addslashes(__t('enter-your-name'))); ?>'" placeholder="<?php echo e(__t('enter-your-name')); ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required  class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo e(addslashes(__t('enter-email'))); ?>'" placeholder="<?php echo e(__t('enter-email')); ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo e(addslashes(__t('enter-subject'))); ?>'" placeholder="<?php echo e(__t('enter-subject')); ?>">
                                </div>
                            </div>

                            <div class="col-12">
                                <label><?php echo app('translator')->get('default.verification'); ?></label><br/>
                                <label for=""><?php echo clean( captcha_img() ); ?></label>
                                <input class="form-control" type="text" name="captcha" placeholder="<?php echo app('translator')->get('default.verification-hint'); ?>"/>

                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn"><?php echo e(__t('send')); ?></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3><?php echo app('translator')->get('default.address'); ?></h3>
                            <p><?php echo clean(setting('general_address')); ?></p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><?php echo app('translator')->get('default.telephone'); ?></h3>
                            <p><?php echo e(setting('general_tel')); ?></p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><?php echo app('translator')->get('default.email'); ?></h3>
                            <p><?php echo clean( setting('general_contact_email') ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->




    <?php if(false): ?>
    <section class="contact-page-area pb-130 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="contact-page-form-area">
                        <h1 class="mb-30"><?php echo app('translator')->get('default.contact-us'); ?></h1>
                        <p><?php echo app('translator')->get('default.get-in-touch-text'); ?></p>
                        <form action="<?php echo e(route('contact.send-mail')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" required  value="<?php echo e(old('name')); ?>" placeholder="<?php echo app('translator')->get('default.name'); ?>">
                                    <span><i class="fas fa-user"></i></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required  placeholder="<?php echo app('translator')->get('default.email'); ?>">
                                    <span><i class="far fa-envelope-open"></i></span>
                                </div>

                                <div class="col-md-12">
                                    <textarea name="message" cols="30" rows="10" required placeholder="<?php echo app('translator')->get('default.message'); ?>"><?php echo e(old('message')); ?></textarea>
                                    <span><i class="fas fa-pencil-alt"></i></span>
                                </div>
                                <div class="col-md-12">
                                    <label><?php echo app('translator')->get('default.verification'); ?></label><br/>
                                    <label for=""><?php echo clean( captcha_img() ); ?></label>
                                    <input class="form-control" type="text" name="captcha" placeholder="<?php echo app('translator')->get('default.verification-hint'); ?>"/>


                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="input-page-btn"><?php echo app('translator')->get('default.submit'); ?><i class="fal fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-locations">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p><?php echo e(setting('general_address')); ?> </p>
                    </div>
                    <div class="contact-locations">
                        <span><i class="far fa-envelope-open"></i></span>
                        <p><?php echo clean( setting('general_contact_email') ); ?> </p>
                    </div>
                    <div class="contact-locations">
                        <span><i class="fas fa-phone"></i></span>
                        <p><?php echo e(setting('general_tel')); ?> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>









<?php $__env->stopSection(); ?>

<?php echo $__env->make(TLAYOUT, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/buson/views/site/home/contact.blade.php ENDPATH**/ ?>