<?php

namespace BlogJF\BlogBundle\Repository;

/**
 * commentaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireRepository extends \Doctrine\ORM\EntityRepository
{
    function getCommentaireById($billetId)
    {
        $qb = $this
            ->createQueryBuilder('c')
            ->where('c.billet = :billet_id')
            ->addorderBy('c.date')
            ->setParameter('billet_id', $billetId)
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}