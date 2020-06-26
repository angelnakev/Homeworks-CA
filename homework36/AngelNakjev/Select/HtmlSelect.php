<?php

namespace AngelNakjev\Select;

class HtmlSelect extends ASelect {
    
    public function makeSelect() {
        echo "<select name=".$this->getName().'>"';
        echo $this->makeOptions($this->value);
        echo "</select>";
    }
}