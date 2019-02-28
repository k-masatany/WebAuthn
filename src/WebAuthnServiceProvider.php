<?php

namespace KMasatany\WebAuthn;

/**
 *
 */
class WebAuthnServiceProvider
{

    private $member;

    public function __construct($member)
    {
        $this->member = $member;
    }

    public function dummy()
    {
        return $this->member;
    }
}
