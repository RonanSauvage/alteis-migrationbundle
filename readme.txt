alteis-migrationbundle : 

Ce bundle est mis en place pour combiner les fonctionnalit�s de rmaBDD_light et Doctrine Migrations Bundle : La commande mise en place permet de g�n�rer un dump de la base de donn�es assur�es par rmaBDD_light et ensuite de lancer
automatiquement une migration assur�e par Doctrine Migrations Bundle. 

Pour t�l�charger le bundle : 

En ligne de commande : $ composer require alteis/alteis-migrationbundle: "dev-master"

ou 

Via le fichier json : on ajoute "require": { "alteis/alteis-migrationbundle": "dev-master" } puis lance la commande $composer update 

Mettre � jour le AppKernel.php : 

	Ajouter dans le tableau des bundles : 
	
	$bundles[] = new RMA\Bundle\DumpBundle\RMADumpBundle();
    $bundles[] = new Alteis\MigrationBundle\AlteisMigrationBundle();

Les d�pendances : 

	"php: >=5.3.9",
	"doctrine/orm: ^2.4.8",
	"doctrine/doctrine-bundle: ~1.4",
	"symfony/symfony: >=2.8.6|<3.0",
	"rma/rmabdd_light: 0.4.*",
	"doctrine/doctrine-migrations-bundle: ^1.0"
	
Commande mise en place :

	php app/console alteis:migration:migrate  ----- Permet de faire un dump de la base de donn�es et lancer une migration