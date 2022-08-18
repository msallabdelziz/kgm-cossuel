<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220703160711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attestation ADD synchronise TINYINT(1) NOT NULL, ADD date_synchro DATETIME DEFAULT NULL, ADD avis VARCHAR(100) DEFAULT NULL, ADD date_avis VARCHAR(100) DEFAULT NULL, ADD compteur VARCHAR(100) DEFAULT NULL, ADD contrat VARCHAR(100) DEFAULT NULL, ADD date_contrat VARCHAR(100) DEFAULT NULL, ADD comptabilisateur VARCHAR(100) DEFAULT NULL, ADD finalisateur VARCHAR(100) DEFAULT NULL, ADD agence_comptabilise VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE detail_verification CHANGE sansobjet sansobjet TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE detail_verification RENAME INDEX point_nonconf_id TO IDX_46F2AF0454D915C5');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles JSON NOT NULL, CHANGE is_actif is_actif TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attestation DROP synchronise, DROP date_synchro, DROP avis, DROP date_avis, DROP compteur, DROP contrat, DROP date_contrat, DROP comptabilisateur, DROP finalisateur, DROP agence_comptabilise');
        $this->addSql('ALTER TABLE detail_verification CHANGE sansobjet sansobjet TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE detail_verification RENAME INDEX idx_46f2af0454d915c5 TO point_nonconf_id');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles LONGTEXT NOT NULL, CHANGE is_actif is_actif TINYINT(1) DEFAULT 1 NOT NULL');
    }
}
