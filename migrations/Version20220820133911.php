<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220820133911 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY detail_verification_ibfk_1');
        $this->addSql('ALTER TABLE detail_verification CHANGE sansobjet sansobjet TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX point_nonconf_id ON detail_verification');
        $this->addSql('CREATE INDEX IDX_46F2AF0454D915C5 ON detail_verification (point_nonconf_id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT detail_verification_ibfk_1 FOREIGN KEY (point_nonconf_id) REFERENCES point_nonconf (id)');
        $this->addSql('ALTER TABLE dossier CHANGE num num VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE electricien ADD autre_num_telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE is_actif is_actif TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY FK_46F2AF0454D915C5');
        $this->addSql('ALTER TABLE detail_verification CHANGE sansobjet sansobjet TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX idx_46f2af0454d915c5 ON detail_verification');
        $this->addSql('CREATE INDEX point_nonconf_id ON detail_verification (point_nonconf_id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT FK_46F2AF0454D915C5 FOREIGN KEY (point_nonconf_id) REFERENCES point_nonconf (id)');
        $this->addSql('ALTER TABLE dossier CHANGE num num VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE electricien DROP autre_num_telephone');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles LONGTEXT NOT NULL, CHANGE is_actif is_actif TINYINT(1) DEFAULT 1 NOT NULL');
    }
}
