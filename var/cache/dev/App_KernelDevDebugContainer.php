<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9OcH4hl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9OcH4hl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9OcH4hl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9OcH4hl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9OcH4hl\App_KernelDevDebugContainer([
    'container.build_hash' => '9OcH4hl',
    'container.build_id' => 'fe72c628',
    'container.build_time' => 1682096566,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9OcH4hl');
