<?php

namespace AngelNakjev\Select;

abstract class ASelect {
    
    protected $name;
    protected $value;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setValue($value) {
        if (is_array($value)) {
            foreach ($value as $key => $browser) {
                $this->value[] = $browser;
            }
        }
    }

    public function getValue() {
        return $this->value;
    }

    protected function makeOptions() {
        foreach ($value as $key) {
            echo "<option value = '$browser'>$browser</option>";
        }
    }
    
    public abstract function makeSelect();
}