<?php

$Module = array( 'name' => 'SF Entity Export' );

$ViewList = array();
$FunctionList = array();

$ViewList['view'] = array(
    'functions' => array( 'view' ),
    'script' => 'view.php',
    'default_navigation_part' => 'sfentityexportnavigationpart',
    'params' => array('Entity')
);
$ViewList['overview'] = array(
    'functions' => array( 'overview' ),
    'script' => 'overview.php',
    'default_navigation_part' => 'sfentityexportnavigationpart'
);
$ViewList['export'] = array(
    'functions' => array( 'export' ),
    'script' => 'export.php',
    'default_navigation_part' => 'sfentityexportnavigationpart',
    'params' => array('Alias')
    );

$FunctionList['view'] = array();
$FunctionList['overview'] = array();
$FunctionList['export'] = array();
