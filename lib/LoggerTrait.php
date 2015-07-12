<?php

namespace Futjikato\SymfonyTrait;

use Symfony\Bridge\Monolog\Logger;

/**
 * Monolog logger trait
 * DI trait for injecting instance of monolog logger
 */
trait LoggerTrait
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * DI setter
     *
     * @param Logger $logger
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return Logger
     */
    protected function getLogger()
    {
        return $this->logger;
    }
} 