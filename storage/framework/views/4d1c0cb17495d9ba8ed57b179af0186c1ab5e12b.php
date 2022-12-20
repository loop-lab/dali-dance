<?php $__env->startPush('head'); ?>
    <meta name="robots" content="noindex" />
    <link
        href="<?php echo e(asset('/vendor/orchid/favicon.svg')); ?>"
        sizes="any"
        type="image/svg+xml"
        id="favicon"
        rel="icon"
    >

    <!-- For Safari on iOS -->
    <meta name="theme-color" content="#21252a">
<?php $__env->stopPush(); ?>

<div class="h2 fw-light d-flex align-items-center">
    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'orchid','width' => '1.2em','height' => '1.2em'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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

    <p class="ms-3 my-0 d-none d-sm-block">
        Dali-Dance
    </p>
</div><?php /**PATH /var/www/u1825826/data/www/dali-dance.ru/resources/views/header.blade.php ENDPATH**/ ?>