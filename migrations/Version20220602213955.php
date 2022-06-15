<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220602213955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP motif_remboursement, DROP motif_rejet');
        $this->addSql('ALTER TABLE remboursement ADD motif VARCHAR(255) DEFAULT NULL, ADD motif_rejet VARCHAR(255) DEFAULT NULL, ADD rejete TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement ADD motif_remboursement VARCHAR(255) DEFAULT NULL, ADD motif_rejet VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE remboursement DROP motif, DROP motif_rejet, DROP rejete');
    }
}
