<?php

namespace App\Command;

use App\Entity\CalculatorData;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CalculateCommand extends Command
{
    protected static $defaultName = 'calculate';

    protected function configure()
    {
        $this
            ->setDescription('Calculate maximum value in serie')
            ->addArgument('count', InputArgument::OPTIONAL, 'Serie count');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $n = intval($input->getArgument('count'));


        if (!$n) {
            $io->error('No arguments!');
            return 0;
        }

        $calculator = new CalculatorData();
        $calculator->setSerieCount($n);
        $maximum = $calculator->maximum();

        $io->success("Maximum value for n == {$n} is {$maximum}");

        return 0;
    }
}
