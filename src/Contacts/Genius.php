<?php
/**
 * Created by PhpStorm.
 * User: htinlynn
 * Date: 11/26/18
 * Time: 4:17 PM
 */

namespace Genius\Contacts;


interface Genius
{
    /**
     * Genius constructor.
     */
    public function __construct();
    /**
     * @param array $phoneNumber
     * @param string $message
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return Genius
     */
    public function sendSMSService(array $phoneNumber, string $message): self;
}

