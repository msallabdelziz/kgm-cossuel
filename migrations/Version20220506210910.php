<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506210910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent ADD profil_id INT DEFAULT NULL, DROP profil');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D275ED078 ON agent (profil_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D275ED078');
        $this->addSql('DROP INDEX IDX_268B9C9D275ED078 ON agent');
        $this->addSql('ALTER TABLE agent ADD profil VARCHAR(255) DEFAULT NULL, DROP profil_id');
    }
}
