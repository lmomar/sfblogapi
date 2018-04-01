<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{

    public function paginate($page, $nbPerPage){
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.createdAt','DESC')
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
