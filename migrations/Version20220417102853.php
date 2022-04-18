<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417102853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB119EB6921');
        $this->addSql('DROP INDEX IDX_1CBA6AB119EB6921 ON installation');
        $this->addSql('ALTER TABLE installation ADD electricien_id INT DEFAULT NULL, ADD alimente VARCHAR(255) NOT NULL, CHANGE client_id proprietaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB176C50E4A FOREIGN KEY (proprietaire_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB15C9609E3 FOREIGN KEY (electricien_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB176C50E4A ON installation (proprietaire_id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB15C9609E3 ON installation (electricien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB176C50E4A');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB15C9609E3');
        $this->addSql('DROP INDEX IDX_1CBA6AB176C50E4A ON installation');
        $this->addSql('DROP INDEX IDX_1CBA6AB15C9609E3 ON installation');
        $this->addSql('ALTER TABLE installation ADD client_id INT DEFAULT NULL, DROP proprietaire_id, DROP electricien_id, DROP alimente');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB119EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB119EB6921 ON installation (client_id)');
    }
}
