<?php

namespace Futjikato\SymfonyTrait;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Doctrine Trait
 * DI trait for injecting doctrine registry.
 */
trait DoctrineTrait
{
    /**
     * @var Registry
     */
    private $registry;

    /**
     * DI setter
     *
     * @param Registry $registry
     */
    public function setRegistry(Registry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * Return instance of doctrine registry
     *
     * @return Registry
     */
    protected function getRegistry()
    {
        return $this->registry;
    }

    /**
     * Return default doctrine object manager
     *
     * @return ObjectManager
     */
    protected function getEntityManager()
    {
        return $this->getRegistry()->getManager();
    }
}
