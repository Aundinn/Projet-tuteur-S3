<?php

namespace PR2L\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * DocumentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DocumentRepository extends EntityRepository
{
    public function myFindByTheme($type)
    {
        $qb = $this->createQueryBuilder('a');

  		$qb->where('a.type = :type')
       		->setParameter('type', $type)
  		;

 		return $qb
    		->getQuery()
    		->getResult()
  		;
    }
    
}
