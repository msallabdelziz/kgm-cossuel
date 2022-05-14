<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220509123448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visite ADD rapport_id INT DEFAULT NULL, ADD date_planifie DATETIME DEFAULT NULL, ADD date_realise DATETIME DEFAULT NULL, ADD date_rapport DATETIME DEFAULT NULL, ADD planifie TINYINT(1) DEFAULT NULL, ADD realise TINYINT(1) DEFAULT NULL, ADD conclusion TINYINT(1) DEFAULT NULL, ADD commentaire VARCHAR(255) DEFAULT NULL, DROP date_visite, CHANGE etat etat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB1DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
        $this->addSql('CREATE INDEX IDX_B09C8CBB1DFBCC46 ON visite (rapport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB1DFBCC46');
        $this->addSql('DROP INDEX IDX_B09C8CBB1DFBCC46 ON visite');
        $this->addSql('ALTER TABLE visite ADD date_visite DATETIME NOT NULL, DROP rapport_id, DROP date_planifie, DROP date_realise, DROP date_rapport, DROP planifie, DROP realise, DROP conclusion, DROP commentaire, CHANGE etat etat VARCHAR(255) NOT NULL');
    }
}
