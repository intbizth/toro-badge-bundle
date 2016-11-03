<?php

namespace Toro\Bundle\BadgeBundle\Doctrine\ORM;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

class BadgeRepository extends EntityRepository
{
    /**
     * @param $localeCode
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function createLocaledQueryBuilder($localeCode)
    {
        $queryBuilder = $this->createQueryBuilder('o');

        $queryBuilder
            ->addSelect('translation')
            ->leftJoin('o.translations', 'translation')
            ->andWhere('translation.locale = :localeCode')
            ->setParameter('localeCode', $localeCode);

        return $queryBuilder;
    }
}
