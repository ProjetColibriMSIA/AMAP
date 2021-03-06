<?php

namespace AMAPBundle\Repository\Announcement;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllFirst() {
        $dateRef=new \DateTime();
        $dateRef->modify('+7 days');
        $query = $this->createQueryBuilder('n')
                ->where('n.isDisplay = 1')
                ->andwhere('n.startDate < :Dateref')
                ->orderBy('n.startDate','DESC')
                ->setMaxResults(4)
                ->setParameter('Dateref', $dateRef)
                ->getQuery();     
        return $query->getResult();
    }
}
