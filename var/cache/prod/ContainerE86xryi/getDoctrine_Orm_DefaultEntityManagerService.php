<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['doctrine.orm.default_entity_manager'] = $container->createProxy('EntityManager_9a5be93', function () use ($container) {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\PhpArrayAdapter(($container->targetDir.''.'/doctrine/orm/default_metadata.php'), new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $a->setQueryCache(($container->privates['doctrine.system_cache_pool'] ?? $container->load('getDoctrine_SystemCachePoolService')));
        $a->setResultCache(($container->privates['doctrine.result_cache_pool'] ?? $container->load('getDoctrine_ResultCachePoolService')));
        $a->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($b, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $a->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setSchemaIgnoreClasses([]);
        $a->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\AffectationsAgentsRepository' => ['privates', 'App\\Repository\\AffectationsAgentsRepository', 'getAffectationsAgentsRepositoryService', true],
            'App\\Repository\\AgenceRepository' => ['privates', 'App\\Repository\\AgenceRepository', 'getAgenceRepositoryService', true],
            'App\\Repository\\AgentRepository' => ['privates', 'App\\Repository\\AgentRepository', 'getAgentRepositoryService', true],
            'App\\Repository\\AttestationConfRepository' => ['privates', 'App\\Repository\\AttestationConfRepository', 'getAttestationConfRepositoryService', true],
            'App\\Repository\\AttestationRepository' => ['privates', 'App\\Repository\\AttestationRepository', 'getAttestationRepositoryService', true],
            'App\\Repository\\DemandeRepository' => ['privates', 'App\\Repository\\DemandeRepository', 'getDemandeRepositoryService', true],
            'App\\Repository\\DepartementRepository' => ['privates', 'App\\Repository\\DepartementRepository', 'getDepartementRepositoryService', true],
            'App\\Repository\\DetailVerificationRepository' => ['privates', 'App\\Repository\\DetailVerificationRepository', 'getDetailVerificationRepositoryService', true],
            'App\\Repository\\DossierRepository' => ['privates', 'App\\Repository\\DossierRepository', 'getDossierRepositoryService', true],
            'App\\Repository\\ElectricienRepository' => ['privates', 'App\\Repository\\ElectricienRepository', 'getElectricienRepositoryService', true],
            'App\\Repository\\GrilleRepository' => ['privates', 'App\\Repository\\GrilleRepository', 'getGrilleRepositoryService', true],
            'App\\Repository\\InstallationRepository' => ['privates', 'App\\Repository\\InstallationRepository', 'getInstallationRepositoryService', true],
            'App\\Repository\\LocaliteRepository' => ['privates', 'App\\Repository\\LocaliteRepository', 'getLocaliteRepositoryService', true],
            'App\\Repository\\NatureBatimentRepository' => ['privates', 'App\\Repository\\NatureBatimentRepository', 'getNatureBatimentRepositoryService', true],
            'App\\Repository\\NatureTravauxRepository' => ['privates', 'App\\Repository\\NatureTravauxRepository', 'getNatureTravauxRepositoryService', true],
            'App\\Repository\\PaiementRepository' => ['privates', 'App\\Repository\\PaiementRepository', 'getPaiementRepositoryService', true],
            'App\\Repository\\PieceJointeRepository' => ['privates', 'App\\Repository\\PieceJointeRepository', 'getPieceJointeRepositoryService', true],
            'App\\Repository\\PointNonconfRepository' => ['privates', 'App\\Repository\\PointNonconfRepository', 'getPointNonconfRepositoryService', true],
            'App\\Repository\\PointVerificationRepository' => ['privates', 'App\\Repository\\PointVerificationRepository', 'getPointVerificationRepositoryService', true],
            'App\\Repository\\ProfilRepository' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', true],
            'App\\Repository\\ProprietaireRepository' => ['privates', 'App\\Repository\\ProprietaireRepository', 'getProprietaireRepositoryService', true],
            'App\\Repository\\RapportRepository' => ['privates', 'App\\Repository\\RapportRepository', 'getRapportRepositoryService', true],
            'App\\Repository\\RecuRepository' => ['privates', 'App\\Repository\\RecuRepository', 'getRecuRepositoryService', true],
            'App\\Repository\\RegionRepository' => ['privates', 'App\\Repository\\RegionRepository', 'getRegionRepositoryService', true],
            'App\\Repository\\RemboursementRepository' => ['privates', 'App\\Repository\\RemboursementRepository', 'getRemboursementRepositoryService', true],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', true],
            'App\\Repository\\RubriqueRepository' => ['privates', 'App\\Repository\\RubriqueRepository', 'getRubriqueRepositoryService', true],
            'App\\Repository\\SignatureRepository' => ['privates', 'App\\Repository\\SignatureRepository', 'getSignatureRepositoryService', true],
            'App\\Repository\\TarifRepository' => ['privates', 'App\\Repository\\TarifRepository', 'getTarifRepositoryService', true],
            'App\\Repository\\TypeConstructionRepository' => ['privates', 'App\\Repository\\TypeConstructionRepository', 'getTypeConstructionRepositoryService', true],
            'App\\Repository\\UtilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
            'App\\Repository\\VerificationRepository' => ['privates', 'App\\Repository\\VerificationRepository', 'getVerificationRepositoryService', true],
            'App\\Repository\\VisiteRepository' => ['privates', 'App\\Repository\\VisiteRepository', 'getVisiteRepositoryService', true],
        ], [
            'App\\Repository\\AffectationsAgentsRepository' => '?',
            'App\\Repository\\AgenceRepository' => '?',
            'App\\Repository\\AgentRepository' => '?',
            'App\\Repository\\AttestationConfRepository' => '?',
            'App\\Repository\\AttestationRepository' => '?',
            'App\\Repository\\DemandeRepository' => '?',
            'App\\Repository\\DepartementRepository' => '?',
            'App\\Repository\\DetailVerificationRepository' => '?',
            'App\\Repository\\DossierRepository' => '?',
            'App\\Repository\\ElectricienRepository' => '?',
            'App\\Repository\\GrilleRepository' => '?',
            'App\\Repository\\InstallationRepository' => '?',
            'App\\Repository\\LocaliteRepository' => '?',
            'App\\Repository\\NatureBatimentRepository' => '?',
            'App\\Repository\\NatureTravauxRepository' => '?',
            'App\\Repository\\PaiementRepository' => '?',
            'App\\Repository\\PieceJointeRepository' => '?',
            'App\\Repository\\PointNonconfRepository' => '?',
            'App\\Repository\\PointVerificationRepository' => '?',
            'App\\Repository\\ProfilRepository' => '?',
            'App\\Repository\\ProprietaireRepository' => '?',
            'App\\Repository\\RapportRepository' => '?',
            'App\\Repository\\RecuRepository' => '?',
            'App\\Repository\\RegionRepository' => '?',
            'App\\Repository\\RemboursementRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\RubriqueRepository' => '?',
            'App\\Repository\\SignatureRepository' => '?',
            'App\\Repository\\TarifRepository' => '?',
            'App\\Repository\\TypeConstructionRepository' => '?',
            'App\\Repository\\UtilisateurRepository' => '?',
            'App\\Repository\\VerificationRepository' => '?',
            'App\\Repository\\VisiteRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService')), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
