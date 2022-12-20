<?php if(isset($title)): ?>
    <li class="nav-item mt-3 mb-1">
        <small class="text-muted ms-4 w-100 user-select-none"><?php echo e(__($title)); ?></small>
    </li>
<?php endif; ?>

<?php if(!empty($name)): ?>
<li class="nav-item <?php echo e(active($active)); ?>">
    <a data-turbo="<?php echo e(var_export($turbo)); ?>"
        <?php echo e($attributes); ?>

    >
        <?php if(isset($icon)): ?>
            <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => $icon,'class' => ''.e(empty($name) ?: 'me-2').''] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

        <?php echo e($name ?? ''); ?>


        <?php if(isset($badge)): ?>
            <b class="badge bg-<?php echo e($badge['class']); ?> col-auto ms-auto"><?php echo e($badge['data']()); ?></b>
        <?php endif; ?>
    </a>
</li>
<?php endif; ?>

<?php if(!empty($list)): ?>
    <div class="nav collapse sub-menu ps-2 <?php echo e(active($active, 'show')); ?>"
         id="menu-<?php echo e($slug); ?>"
         data-bs-parent="#headerMenuCollapse">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $item->build($source); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if($divider): ?>
    <li class="divider my-2"></li>
<?php endif; ?>

<?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/vendor/orchid/platform/resources/views/actions/menu.blade.php ENDPATH**/ ?>