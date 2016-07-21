alteis-migrationbundle : 

Ce bundle est mis en place pour combiner les fonctionnalités de rmaBDD_light et Doctrine Migrations Bundle : La commande mise en place permet de générer un dump de la base de données assurées par rmaBDD_light et ensuite de lancer
automatiquement une migration assurée par Doctrine Migrations Bundle. 

Pour télécharger le bundle : 

En ligne de commande : $ composer require alteis/alteis-migrationbundle: "dev-master"

ou 

Via le fichier json : on ajoute "require": { "alteis/alteis-migrationbundle": "dev-master" } puis lance la commande $composer update 

Mettre à jour le AppKernel.php : 

	Ajouter dans le tableau des bundles : 
	
	$bundles[] = new RMA\Bundle\DumpBundle\RMADumpBundle();
    $bundles[] = new Alteis\MigrationBundle\AlteisMigrationBundle();

Les dépendances : 

	"php: >=5.3.9",
	"doctrine/orm: ^2.4.8",
	"doctrine/doctrine-bundle: ~1.4",
	"symfony/symfony: >=2.8.6|<3.0",
	"rma/rmabdd_light: 0.4.*",
	"doctrine/doctrine-migrations-bundle: ^1.0"
	
Commande mise en place :

	php app/console alteis:migration:migrate  ----- Permet de faire un dump de la base de données et lancer une migration