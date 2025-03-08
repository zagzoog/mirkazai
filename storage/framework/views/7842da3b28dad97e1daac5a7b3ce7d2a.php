<!--[if BLOCK]><![endif]--><?php if($gatewayProducts && $gatewayProducts->isNotEmpty()): ?>
    <div class="mt-20">
        <h4 class="mb-4">
            <?php echo e(__('These values are generated for you')); ?>

        </h4>
        <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-2xs']); ?>
             <?php $__env->slot('head', null, []); ?> 
                <th>
                    <?php echo e(__('Gateway')); ?>

                </th>
                <th>
                    <?php echo e(__('Product ID')); ?>

                </th>
                <th>
                    <?php echo e(__('Plan / Price ID')); ?>

                </th>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('body', null, []); ?> 
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $gatewayProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="even:bg-foreground/5">
                        <td>
                            <?php echo e($product->gateway_title); ?>

                        </td>
                        <td>
                            <?php echo e($product->product_id); ?>

                        </td>
                        <td>
                            <?php echo e($product->price_id); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $attributes = $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/product-ids-list.blade.php ENDPATH**/ ?>