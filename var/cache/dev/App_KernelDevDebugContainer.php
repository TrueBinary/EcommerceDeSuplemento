<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerReooyVy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerReooyVy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerReooyVy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerReooyVy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerReooyVy\App_KernelDevDebugContainer([
    'container.build_hash' => 'ReooyVy',
    'container.build_id' => '4d60824d',
    'container.build_time' => 1612180881,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerReooyVy');
