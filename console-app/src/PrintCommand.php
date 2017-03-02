<?php 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PrintCommand extends Command {

    protected function configure()
    {
        $this->setname('print')
             ->setDescription('Echoing a message.')
             ->addArgument('message', InputArgument::OPTIONAL, 'What need to be echoing?', 'This is default message if you don\'t provide anything');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo $input->getArgument('message');
        $output->writeln('');
        $output->writeln('<info>All Done</info>');
        $output->writeln('<error>There is an error<error>');
    }

}

 ?>