<?php

$module = $Params['Module'];
$entityName = $Params['Entity'];

$container = ezpKernel::instance()->getServiceContainer();
try {
    $controller = $container->get('styleflasher.entity_export.view.controller');
    $Result['groups'] = $controller->getGroupsAction($entityName);
    $Result['content'] = $controller->viewAction($entityName)->getContent();
    $Result['navigation_part'] = 'sfentityexportnavigationpart';
    $Result['left_menu'] = 'design:parts/entityexport/menu.tpl';
    $Result['path'] = array(
        array(
            'url' => false,
            'text' => 'SF Entity Export View'
        )
    );
} catch (\Exception $e) {
    eZDebug::writeError("Exception while trying to login on new stack: ". $e->getMessage());
}
