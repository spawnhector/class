<nav class="navbar navbar-default navbar-fixed-top navbar-top" style="position: fixed;top:48px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link" style="outline: none">
                <span class="hamburger-inner"></span>
            </button>
            <?php $__env->startSection('breadcrumbs'); ?>
            <ol class="breadcrumb hidden-xs">
                <?php
                $segments = array_filter(explode('/', str_replace(route('dashboard'), '', Request::url())));
                $url = route('dashboard');
                ?>
                <?php if(count($segments) == 0): ?>
                    <li class="active"><i class="voyager-boat"></i> <?php echo e(__('voyager::generic.dashboard')); ?></li>
                <?php else: ?>
                    <li class="active">
                        <a href="<?php echo e(route('dashboard')); ?>"><i class="voyager-boat"></i> <?php echo e(__('voyager::generic.dashboard')); ?></a>
                    </li>
                    <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $url .= '/'.$segment;
                        ?>
                        <?php if($loop->last): ?>
                            <li><?php echo e(__($segment)); ?></li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e($url); ?>"><?php echo e(__($segment)); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ol>
            <?php echo $__env->yieldSection(); ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\xampp\hhub\resources\views/dashboard/navbar.blade.php ENDPATH**/ ?>