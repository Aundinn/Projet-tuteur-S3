<?php

namespace PR2L\SiteBundle\Tests;

class PR2LTest extends \Twig_Extension
{
    public function getFunctions() {
      return array(
           'maFonction' => new \Twig_Function_Method($this, 'testEcho'),
      );
    }
    
  public function testEcho(){
    echo "Coucou !";
  }
    
  public function getName(){
    return null;
  }
}
