<?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination flex items-center gap-2">
            
            <?php if($paginator->onFirstPage()): ?>
                <li
                    class="page-item disabled"
                    aria-disabled="true"
                    aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"
                >
                    <span
                        class="page-link size-7 inline-flex items-center justify-center rounded-full text-xl transition-all"
                        aria-hidden="true"
                    >
                        &lsaquo;
                    </span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a
                        class="page-link size-7 inline-flex items-center justify-center rounded-full text-xl transition-all hover:-translate-x-0.5 hover:bg-primary/10"
                        href="<?php echo e($paginator->previousPageUrl()); ?>"
                        rel="prev"
                        aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"
                    >
                        &lsaquo;
                    </a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li
                        class="page-item disabled"
                        aria-disabled="true"
                    >
                        <span class="page-link size-7 inline-flex items-center justify-center rounded-full transition-all hover:-translate-y-0.5 hover:bg-primary/10">
                            <?php echo e($element); ?>

                        </span>
                    </li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li
                                class="page-item active"
                                aria-current="page"
                            >
                                <span class="page-link size-7 inline-flex items-center justify-center rounded-full bg-primary text-primary-foreground transition-all">
                                    <?php echo e($page); ?>

                                </span>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a
                                    class="page-link size-7 inline-flex items-center justify-center rounded-full transition-all hover:-translate-y-0.5 hover:bg-primary/10"
                                    href="<?php echo e($url); ?>"
                                >
                                    <?php echo e($page); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a
                        class="page-link size-7 inline-flex items-center justify-center rounded-full text-xl transition-all hover:translate-x-0.5 hover:bg-primary/10"
                        href="<?php echo e($paginator->nextPageUrl()); ?>"
                        rel="next"
                        aria-label="<?php echo app('translator')->get('pagination.next'); ?>"
                    >
                        &rsaquo;
                    </a>
                </li>
            <?php else: ?>
                <li
                    class="page-item disabled"
                    aria-disabled="true"
                    aria-label="<?php echo app('translator')->get('pagination.next'); ?>"
                >
                    <span
                        class="page-link size-7 inline-flex items-center justify-center rounded-full text-xl transition-all"
                        aria-hidden="true"
                    >
                        &rsaquo;
                    </span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>