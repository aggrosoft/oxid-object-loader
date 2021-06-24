<?php

namespace Aggrosoft\ObjectLoader\Core;

class ViewConfig extends ViewConfig_parent
{

    public function loadObject ($class, $oxid) {
        $object = oxNew($class);
        if ($object->load($oxid)) {
            return $object;
        }
    }

}