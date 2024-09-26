<?php

namespace App\Repository;

use App\Entity\Summary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Summary>
 */
class SummaryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Summary::class);
    }

    /**
     * Save the Summary entity.
     *
     * @param Summary $summary
     * @param bool $flush
     */
    public function save(Summary $summary, bool $flush = false): void
    {
        $this->_em->persist($summary);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Remove the Summary entity.
     *
     * @param Summary $summary
     * @param bool $flush
     */
    public function remove(Summary $summary, bool $flush = false): void
    {
        $this->_em->remove($summary);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Find all summaries by a certain date.
     *
     * @param \DateTime $date
     * @return Summary[]
     */
    public function findByDate(\DateTime $date): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.extractionDate = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }

    /**
     * Find summaries with a certain condition (e.g., total users greater than a value).
     *
     * @param int $minUsers
     * @return Summary[]
     */
    public function findWithMinUsers(int $minUsers): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.totalUsers > :minUsers')
            ->setParameter('minUsers', $minUsers)
            ->getQuery()
            ->getResult();
    }
}
