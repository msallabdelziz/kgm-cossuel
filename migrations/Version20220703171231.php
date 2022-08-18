<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220703171231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attestation_conf (id INT AUTO_INCREMENT NOT NULL, numero VARCHAR(255) DEFAULT NULL, usages VARCHAR(255) DEFAULT NULL, date_delivrance VARCHAR(255) DEFAULT NULL, electricien VARCHAR(255) DEFAULT NULL, telephone_e VARCHAR(255) DEFAULT NULL, email_e VARCHAR(255) DEFAULT NULL, numpiece_e VARCHAR(255) DEFAULT NULL, adresse_e VARCHAR(255) DEFAULT NULL, proprietaire VARCHAR(255) DEFAULT NULL, telephone_p VARCHAR(255) DEFAULT NULL, email_p VARCHAR(255) DEFAULT NULL, numpiece_p VARCHAR(255) DEFAULT NULL, adresse_p VARCHAR(255) DEFAULT NULL, localite VARCHAR(255) DEFAULT NULL, latitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, puissance VARCHAR(255) DEFAULT NULL, agence VARCHAR(255) DEFAULT NULL, referent VARCHAR(255) DEFAULT NULL, controleur VARCHAR(255) DEFAULT NULL, avis VARCHAR(100) DEFAULT NULL, date_avis VARCHAR(100) DEFAULT NULL, compteur VARCHAR(100) DEFAULT NULL, contrat VARCHAR(100) DEFAULT NULL, date_contrat VARCHAR(100) DEFAULT NULL, synchronise1 VARCHAR(100) DEFAULT NULL, date_synchro1 VARCHAR(100) DEFAULT NULL, synchronise2 VARCHAR(100) DEFAULT NULL, date_synchro2 VARCHAR(100) DEFAULT NULL, comptabilise VARCHAR(100) DEFAULT NULL, finalise VARCHAR(100) DEFAULT NULL, comptabilisateur VARCHAR(100) DEFAULT NULL, finalisateur VARCHAR(100) DEFAULT NULL, agence_synchronise VARCHAR(100) DEFAULT NULL, agence_comptabilise VARCHAR(100) DEFAULT NULL, agence_finalise VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attestation CHANGE synchronise1 synchronise1 TINYINT(1) DEFAULT NULL, CHANGE synchronise2 synchronise2 TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE attestation_conf');
        $this->addSql('ALTER TABLE attestation CHANGE synchronise1 synchronise1 TINYINT(1) NOT NULL, CHANGE synchronise2 synchronise2 TINYINT(1) NOT NULL');
    }
}
