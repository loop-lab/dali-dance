<th <?php if(empty(!$width)): ?> width="<?php echo e($width); ?>" <?php endif; ?> class="text-<?php echo e($align); ?>" data-column="<?php echo e($slug); ?>">
    <div>
        <?php if($sort): ?>
            <a href="<?php echo e($sortUrl); ?>"
               class="<?php if(!is_sort($column)): ?> text-muted <?php endif; ?>">
                <?php echo e($title); ?>


                <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('orchid-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Orchid\Screen\Components\Popover::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c)): ?>
<?php $component = $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c; ?>
<?php unset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c); ?>
<?php endif; ?>

                <?php if(is_sort($column)): ?>
                    <?php $sortIcon = 'sort-amount-'.get_sort($column) ?>
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => $sortIcon] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                <?php endif; ?>
            </a>
        <?php else: ?>
            <?php echo e($title); ?>


            <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('orchid-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Orchid\Screen\Components\Popover::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c)): ?>
<?php $component = $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c; ?>
<?php unset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c); ?>
<?php endif; ?>
        <?php endif; ?>


            <?php echo $__env->renderWhen($filter !== null, "platform::partials.layouts.filter", ['filter' => $filter], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
    </div>

    <?php if($filterString): ?>
        <div data-controller="filter" class="mt-2">
            <a href="#"
               data-action="filter#clearFilter"
               data-filter="<?php echo e($column); ?>"
               class="badge bg-light border d-inline-flex align-items-center">
                <span><?php echo e($filterString); ?></span>
                <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'cross','class' => 'ms-1'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
</th>
<?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/vendor/orchid/platform/resources/views/partials/layouts/th.blade.php ENDPATH**/ ?>