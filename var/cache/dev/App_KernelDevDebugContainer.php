<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIKTAgX3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIKTAgX3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIKTAgX3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIKTAgX3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIKTAgX3\App_KernelDevDebugContainer([
    'container.build_hash' => 'IKTAgX3',
    'container.build_id' => '449a3439',
    'container.build_time' => 1683278303,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIKTAgX3');
