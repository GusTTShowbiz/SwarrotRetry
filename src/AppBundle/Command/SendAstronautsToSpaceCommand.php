<?php

namespace AppBundle\Command;

use Swarrot\Broker\Message;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendAstronautsToSpaceCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('eleven:send_astronauts_to_space')
            ->setDescription('Send a bunch of crazy astronauts to space!')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $output->writeln(sprintf('<info>%s</info>', 'Sending astronaut Wilson to space'));
            $message = new Message('hello');
            $this->getContainer()->get('swarrot.publisher')->publish('send_astronaut_to_space_publisher', $message);
        } catch (\Exception $e) {
            $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));
        }
    }
}
