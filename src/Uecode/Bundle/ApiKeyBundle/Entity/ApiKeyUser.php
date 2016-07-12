<?php

namespace Uecode\Bundle\ApiKeyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Uecode\Bundle\ApiKeyBundle\Model\ApiKeyUser as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="api_key_user")
 */
class ApiKeyUser extends BaseUser
{
    /**
     * @ORM\Column(name="api_key", type="string", length=255, nullable=true)
     */
    protected $apiKey;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
