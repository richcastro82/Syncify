<?php $__env->startSection('page-title',(!empty($article->meta_title))? $article->meta_title:$article->title); ?>
<?php $__env->startSection('meta-description',$article->meta_description); ?>
<?php $__env->startSection('inline-title',$article->title); ?>

<?php $__env->startSection('content'); ?>




    <section class="about-area them-2 pb-130 pt-50">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="about-content them-2">
                        <?php echo $article->content; ?>

                    </div>
                    <!-- about content -->
                </div>
            </div> <!-- row -->
        </div>
    </section>





<?php $__env->stopSection(); ?>

<?php echo $__env->make(TLAYOUT, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vuu0eqn78jhj/public_html/syncify.us/public/templates/buson/views/site/home/article.blade.php ENDPATH**/ ?>