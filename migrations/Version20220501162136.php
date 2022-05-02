<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220501162136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE agent CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE caissier CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE comptable CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE controleur CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE daf CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE referent CHANGE id_agence id_agence INT DEFAULT NULL, CHANGE fonction fonction VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE caissier CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comptable CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE controleur CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE daf CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE referent CHANGE id_agence id_agence INT NOT NULL, CHANGE fonction fonction VARCHAR(255) NOT NULL');
    }
}
