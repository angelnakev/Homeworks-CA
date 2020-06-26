<?php
class Select{

  public $name;
  public $value;

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

  private function makeOptions($value) {
    foreach ($value as $key => $browser) {
      echo "<option value = '$browser'>$browser</option>";
    }
  }

  public function makeSelect() {
    echo "<select> name=".$this->getName().'>"';
    echo "<option value='0' selected>Choose browser</option>";
    echo $this->makeOptions($this->value);
    echo "</select>";
  }
    //Property
    //Create String variable $name.
    //Create Array variable $value.
   
    //Methods
    // create methods getName() and  setName($name)
    //The string set by this method will be the name of the select field.

   
    //Create method setVallue($value)
    //This methods provides the values used for the options
    //in the select field and checks to be sure the value is an array. 
 
    //Create method getValue()
   
    // Create method makeOptions($value)
    //This method creates the actual select options. It is private, 
    //since there is no need for it outside the operations of the class.
 
    // Create method makeSelect()
    //This method puts it all together to create the select field.
 
  } 
  