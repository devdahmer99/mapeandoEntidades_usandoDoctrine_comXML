<?php

namespace Filmes\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    /**
     * @throws ORMException|\Doctrine\ORM\ORMException
     */
    public function criaEntityManager(): EntityManagerInterface
    {
        $config = Setup::createAnnotationMetadataConfiguration(
            [__DIR__ . '/../Entity']
        );

        $connection = [
                'driver' => 'pdo_pgsql',
                'dbname' => 'filmes_alura',
                'user' => 'postgres',
                'password' => '1099',
                'host' => 'localhost'
            ];

        return EntityManager::create($connection, $config);
    }
}