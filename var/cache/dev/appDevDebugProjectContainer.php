<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG26dhm2\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG26dhm2/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerG26dhm2.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerG26dhm2\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerG26dhm2\appDevDebugProjectContainer(array(
    'container.build_hash' => 'G26dhm2',
    'container.build_id' => '1f37306b',
    'container.build_time' => 1518980994,
));
