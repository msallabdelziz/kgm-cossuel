<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220508150055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE localite ADD CONSTRAINT FK_F5D7E4A9D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('CREATE INDEX IDX_F5D7E4A9D725330D ON localite (agence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE localite DROP FOREIGN KEY FK_F5D7E4A9D725330D');
        $this->addSql('DROP INDEX IDX_F5D7E4A9D725330D ON localite');
    }
}
