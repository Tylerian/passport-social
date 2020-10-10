<?php

abstract class AuthStrategy
{
    /**
     * Retrieves the user from an oauth token.
     */
    public abstract function getUserByToken(string $token);
}