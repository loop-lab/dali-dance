<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="datetime"
         class="input-group"
        <?php echo e($dataAttributes); ?>>
        <input type="text"
               placeholder="<?php echo e($placeholder ?? ''); ?>"
               <?php echo e($attributes); ?>

               autocomplete="off"
               data-datetime-target="instance"
        >

        <?php if(true === $allowEmpty): ?>
            <div class="input-group-append bg-white">
                <a class="input-group-text h-100 text-muted"
                   title="clear"
                   data-action="click->datetime#clear">
                        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'cross'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('orchid-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Orchid\Icons\IconComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc)): ?>
<?php $component = $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc; ?>
<?php unset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc); ?>
<?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php echo $__env->renderComponent(); ?>




<?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/vendor/orchid/platform/resources/views/fields/datetime.blade.php ENDPATH**/ ?>