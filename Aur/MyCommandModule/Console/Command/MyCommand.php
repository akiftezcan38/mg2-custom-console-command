<?php

namespace Aur\MyCommandModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    protected function configure()
    {
        $this->setName('aur:my-command');//burada vereceğimiz isimle komutu çalıştıracağız.
        $this->setDescription('Bu komut için bilgilendirici açıklama girebilirsiniz');
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "Merhaba \n";
    }
}
