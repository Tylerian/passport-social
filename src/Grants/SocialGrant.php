<?php

use League\OAuth2\Server\Grant\AbstractGrant;

class SocialGrant extends AbstractGrant
{
    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
        return 'social_provider';
    }
}