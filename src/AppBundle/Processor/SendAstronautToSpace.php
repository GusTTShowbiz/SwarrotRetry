<?php

namespace AppBundle\Processor;

use Swarrot\Broker\Message;
use Swarrot\Processor\ProcessorInterface;

class SendAstronautToSpace implements ProcessorInterface
{
    private $logger;

    public function process(Message $message, array $options)
    {
        throw new \Exception('An error occurred.');
    }
}
