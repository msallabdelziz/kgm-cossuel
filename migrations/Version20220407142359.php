<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407142359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande ADD installation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5167B88B4 FOREIGN KEY (installation_id) REFERENCES installation (id)');
        $this->addSql('CREATE INDEX IDX_2694D7A5167B88B4 ON demande (installation_id)');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB180E95E18');
        $this->addSql('DROP INDEX IDX_1CBA6AB180E95E18 ON installation');
        $this->addSql('ALTER TABLE installation DROP demande_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5167B88B4');
        $this->addSql('DROP INDEX IDX_2694D7A5167B88B4 ON demande');
        $this->addSql('ALTER TABLE demande DROP installation_id');
        $this->addSql('ALTER TABLE installation ADD demande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB180E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB180E95E18 ON installation (demande_id)');
    }
}
