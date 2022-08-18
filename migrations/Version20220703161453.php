<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220703161453 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attestation ADD synchronise2 TINYINT(1) NOT NULL, ADD date_synchro2 DATETIME DEFAULT NULL, CHANGE synchronise synchronise1 TINYINT(1) NOT NULL, CHANGE date_synchro date_synchro1 DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attestation ADD synchronise TINYINT(1) NOT NULL, ADD date_synchro DATETIME DEFAULT NULL, DROP synchronise1, DROP date_synchro1, DROP synchronise2, DROP date_synchro2');
    }
}
