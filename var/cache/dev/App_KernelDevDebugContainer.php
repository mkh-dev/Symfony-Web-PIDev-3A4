<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQv7k3lb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQv7k3lb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQv7k3lb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQv7k3lb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQv7k3lb\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qv7k3lb',
    'container.build_id' => '0f59fc54',
    'container.build_time' => 1682176614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQv7k3lb');
