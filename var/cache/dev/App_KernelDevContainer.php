<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOJRYYZ4\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOJRYYZ4/App_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerOJRYYZ4.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\ContainerOJRYYZ4\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \ContainerOJRYYZ4\App_KernelDevContainer([
    'container.build_hash' => 'OJRYYZ4',
    'container.build_id' => '892903fc',
    'container.build_time' => 1667166431,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOJRYYZ4');
