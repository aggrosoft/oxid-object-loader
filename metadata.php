<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agobjectloader',
    'title'        => 'Aggrosoft Object Loader',
    'description'  => 'Adds methods to load generic objects inside of template',
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Core\ViewConfig::class => Aggrosoft\ObjectLoader\Core\ViewConfig::class
    )
);
