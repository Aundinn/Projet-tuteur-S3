<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EssaiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EssaiRepository extends EntityRepository
{    
  public function myFindAll(){
         return $this
        ->createQueryBuilder('a')
        ->getQuery()
        ->getResult()
        ;

  }

}