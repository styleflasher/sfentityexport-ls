<?php

header("Content-type:text/csv; charset=utf-8");
header('Content-Disposition: attachment; filename="export.csv"');

$module = $Params['Module'];
$alias = $Params['Alias'];

$container = ezpKernel::instance()->getServiceContainer();
try {
    $controller = $container->get('styleflasher.entity_export.export.controller');
} catch (\Exception $e) {
    eZDebug::writeError("Exception while trying to login on new stack: ". $e->getMessage());
}

echo $controller->exportAction($alias)->getContent();
eZExecution::cleanExit();
