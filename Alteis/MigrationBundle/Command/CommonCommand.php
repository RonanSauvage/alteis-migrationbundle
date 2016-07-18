<?php
namespace Alteis\MigrationBundle\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
class CommonCommand extends ContainerAwareCommand
{
    protected function configure()
    {
       $this->setName('alteis:migration:help')
            ->setDescription('Cette commande permet de lister les commandes disponibles dans le bundle AlteisMigration');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input,$output);

        $io->title('Commandes disponibles dans AlteisMigrationBundle : ');

        $headers = array (
            'Commandes', 'Rôles', 'Options', 'Arguments'
        );

        $rows = array(
            array (
                'alteis:migration:migrate',
                'Cette commande permet de générer un dump et lancer une migration assurée par le bundle DoctrineMigrations'
            )
        );

        $io->table($headers, $rows);
    }

}