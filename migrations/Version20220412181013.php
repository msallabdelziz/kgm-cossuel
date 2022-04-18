<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412181013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departement DROP slug');
        $this->addSql('ALTER TABLE localite DROP slug');
        $this->addSql('ALTER TABLE region DROP slug');
        $this->addSql('ALTER TABLE utilisateur DROP slug');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departement ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE localite ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE region ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD slug VARCHAR(255) NOT NULL');
    }
}
