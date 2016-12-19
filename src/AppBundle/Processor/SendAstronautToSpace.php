<?php

namespace AppBundle\Processor;

use Swarrot\Broker\Message;
use Swarrot\Processor\ProcessorInterface;

class SendAstronautToSpace implements ProcessorInterface
{
    public function process(Message $message, array $options)
    {
        echo $message->getBody()['name'];
        throw new \Exception('An error occurred.');
    }
}
