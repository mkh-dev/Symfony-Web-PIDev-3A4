<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZP5CK9m\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZP5CK9m/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZP5CK9m.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZP5CK9m\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZP5CK9m\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZP5CK9m',
    'container.build_id' => 'e6cdb210',
    'container.build_time' => 1683199966,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZP5CK9m');
