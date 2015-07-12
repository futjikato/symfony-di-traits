<?php

namespace Futjikato\SymfonyTrait;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * Token storage trait provide a setter for the token storage service and provides
 * functionality to return the current user object
 */
trait TokenStorageTrait
{
    /**
     * Token storage instance
     *
     * @var TokenStorage
     */
    private $storage;

    /**
     * DI setter
     *
     * @param TokenStorage $storage
     */
    public function setTokenStorage(TokenStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * Return the current authentication token or null if none is present.
     *
     * @return null|TokenInterface
     */
    protected function getToken()
    {
        return $this->storage->getToken();
    }

    /**
     * Return the current user object if authentication token exists.
     * Return null otherwise.
     *
     * @return null|mixed
     */
    protected function getUser()
    {
        $token = $this->getToken();
        if(!$token) {
            return null;
        }

        return $token->getUser();
    }
}
