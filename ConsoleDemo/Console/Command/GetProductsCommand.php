<?php 
namespace CodeUnit\ConsoleDemo\Console\Command;

/*Symfony Console Components*/
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class GetProductsCommand extends Command
{
 
    protected function configure()
    {
        $this->setName('consoledemo:getproduts')->setDescription('comando de consola de ejemplo');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('comando ejecutado');
    }
 
}