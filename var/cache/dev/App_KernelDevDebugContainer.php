<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6FV7OgT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6FV7OgT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6FV7OgT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6FV7OgT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6FV7OgT\App_KernelDevDebugContainer([
    'container.build_hash' => '6FV7OgT',
    'container.build_id' => 'c55f8d39',
    'container.build_time' => 1665410799,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6FV7OgT');
