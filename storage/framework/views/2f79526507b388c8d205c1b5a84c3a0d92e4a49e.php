<div class="form-group">
    <?php if(isset($title)): ?>
        <label for="<?php echo e($id); ?>" class="form-label"><?php echo e($title); ?>

            <?php if(isset($attributes['required']) && $attributes['required']): ?>
                <sup class="text-danger">*</sup>
            <?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover ?? ''] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
        </label>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if($errors->has($oldName)): ?>
        <div class="invalid-feedback d-block">
            <small><?php echo e($errors->first($oldName)); ?></small>
        </div>
    <?php elseif(isset($help)): ?>
        <small class="form-text text-muted"><?php echo $help; ?></small>
    <?php endif; ?>
</div>

<?php if(isset($hr)): ?>
    <div class="line line-dashed border-bottom my-3"></div>
<?php endif; ?>
<?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/vendor/orchid/platform/resources/views/partials/fields/vertical.blade.php ENDPATH**/ ?>