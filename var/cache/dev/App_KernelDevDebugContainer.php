<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZu7ox15\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZu7ox15/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZu7ox15.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZu7ox15\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZu7ox15\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zu7ox15',
    'container.build_id' => '85ffdaff',
    'container.build_time' => 1649463511,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZu7ox15');