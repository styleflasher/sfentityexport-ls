<?php

$module = $Params['Module'];

$container = ezpKernel::instance()->getServiceContainer();
try {
    $controller = $container->get('styleflasher.entity_export.overview.controller');
    $Result['groups'] = $controller->getGroupsAction($entityName);
    $Result['content'] = $controller->overviewAction($entityName)->getContent();
    $Result['path'] = $path;
    $Result['navigation_part'] = 'sfentityexportnavigationpart';
    $Result['left_menu'] = 'design:parts/entityexport/menu.tpl';
    $Result['path'] = array(
        array(
            'url' => false,
            'text' => 'SF Entity Export Overview'
        )
    );
} catch (\Exception $e) {
    eZDebug::writeError("Exception while trying to login on new stack: ". $e->getMessage());
}
