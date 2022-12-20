<div class="toast-wrapper" data-controller="toast">
    <template id="toast">
        <div class="toast"
             role="alert"
             aria-live="assertive"
             aria-atomic="true"
             data-bs-delay="5000"
             data-bs-autohide="true">
            <div class="toast-body p-3 bg-white rounded shadow-sm d-flex">
                <p class="mb-0">
                    <span class="text-{type}">
                        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'circle','class' => 'me-2'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    </span>
                    {message}
                </p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </template>


    <?php if(session()->has(\Orchid\Alert\Toast::SESSION_MESSAGE)): ?>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
             data-bs-delay="<?php echo e(session(\Orchid\Alert\Toast::SESSION_DELAY)); ?>"
             data-bs-autohide="<?php echo e(session(\Orchid\Alert\Toast::SESSION_AUTO_HIDE)); ?>">
            <div class="toast-body p-3 bg-white rounded shadow-sm d-flex">
                <p class="mb-0 me-1">
                    <span class="text-<?php echo e(session(\Orchid\Alert\Toast::SESSION_LEVEL)); ?>">
                        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'circle','class' => 'me-2'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    </span>

                    <?php echo e(session(\Orchid\Alert\Toast::SESSION_MESSAGE)); ?>

                </p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

</div>


<?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/vendor/orchid/platform/resources/views/partials/toast.blade.php ENDPATH**/ ?>