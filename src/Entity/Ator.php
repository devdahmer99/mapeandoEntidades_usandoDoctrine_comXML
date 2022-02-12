<?php

namespace Filmes\Doctrine\Entity;

/**
 * @Entity
 * @Table(name="ator")
 */

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

class Ator
{

/**
* @Id
* @GeneratedValue
* @Column(name="id_ator", type="integer")
*/
    private $id;
    /**
     * @Column(name="primeiro_nome", type="string")
     */

    private $primeiroNome;
    /**
     *
     * @Column(name="ultimo_nome", type="string")
     */

    private $ultimoNome;
    /**
     *
     * @Column(name="data_atualizado", type="datetime")
     */

    private $ultimaAtualizacao;
}