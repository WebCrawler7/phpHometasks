<!-- Изучаем наследование -->

<?php

class Page {

  protected $name;

  public function __construct($name = "Home Page") {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class MainPage extends Page {
    
  public function __construct($name = "Home Page") {
    $this->name = "Main " . $name;
  }

  public function testPage() {
    return "Main";
  }
}

$page = new MainPage();
echo $page->getName();
// echo $page->testPage();