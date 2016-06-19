<?php

abstract class Entity {

    public function init($row) {
        foreach ($row as $column => $value) {   //user_id
            $methodName = str_replace('_', ' ', $column); // user id
            $methodName = ucwords($methodName); // User Id
            $methodName = str_replace(' ', '', $methodName);
            $methodName = 'set' . $methodName;

            $this->$methodName($value);

        }

        return $this;
    }
}