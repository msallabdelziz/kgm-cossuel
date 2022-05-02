<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502014651 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier CHANGE heure_creation heure_creation DATETIME DEFAULT NULL, CHANGE date_cloture date_cloture DATETIME DEFAULT NULL, CHANGE affecte affecte TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier CHANGE heure_creation heure_creation DATETIME NOT NULL, CHANGE date_cloture date_cloture DATETIME NOT NULL, CHANGE affecte affecte TINYINT(1) NOT NULL');
    }
}
