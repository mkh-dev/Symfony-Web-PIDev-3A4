<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIymxpmz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIymxpmz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIymxpmz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIymxpmz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIymxpmz\App_KernelDevDebugContainer([
    'container.build_hash' => 'Iymxpmz',
    'container.build_id' => 'e33c9289',
    'container.build_time' => 1683205380,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIymxpmz');
