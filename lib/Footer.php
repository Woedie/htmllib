<?php

namespace milanl\htmllib;

class Footer extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "footer";
  }
}
