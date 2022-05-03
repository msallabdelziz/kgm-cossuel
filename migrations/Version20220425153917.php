<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220425153917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE test');
        $this->addSql('ALTER TABLE demande ADD cout INT DEFAULT NULL, CHANGE numero numero VARCHAR(255) DEFAULT NULL, CHANGE type_demande type_demande VARCHAR(255) DEFAULT NULL, CHANGE date_validation date_validation DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE installation ADD step INT NOT NULL, CHANGE `usage` usages VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, test VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE demande DROP cout, CHANGE numero numero INT NOT NULL, CHANGE type_demande type_demande VARCHAR(255) NOT NULL, CHANGE date_validation date_validation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE installation DROP step, CHANGE usages `usage` VARCHAR(255) NOT NULL');
    }
}
