<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;


/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{

    public function paginate($page, $nbPerPage){
        $qb = $this->createQueryBuilder('p')
            ->select('p','c')
            ->Join('p.category','c')
            ->orderBy('p.createdAt','DESC')

        ;
        $query = $qb->getQuery();
        $premierResulta = ((int)$page - 1) * $nbPerPage;
        $query->setFirstResult($premierResulta)->setMaxResults($nbPerPage);
        $paginator = new Paginator($query);
        if(($paginator->count() <= $premierResulta) && $page != 1){
            throw new NotFoundHttpException("la page demandé n'existe pas");
        }
        return $paginator;
    }
}
