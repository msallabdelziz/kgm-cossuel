<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428001309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement ADD observation VARCHAR(255) DEFAULT NULL, DROP libelle, CHANGE date_paiement date_paiement DATETIME DEFAULT NULL, CHANGE reference reference VARCHAR(255) DEFAULT NULL, CHANGE motif_remboursement motif_remboursement VARCHAR(255) DEFAULT NULL, CHANGE motif_rejet motif_rejet VARCHAR(255) DEFAULT NULL, CHANGE etat_rembousement etat_rembousement VARCHAR(255) DEFAULT NULL, CHANGE date_facture date_saisie DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement ADD libelle VARCHAR(255) NOT NULL, DROP observation, CHANGE date_paiement date_paiement DATETIME NOT NULL, CHANGE reference reference VARCHAR(255) NOT NULL, CHANGE motif_remboursement motif_remboursement VARCHAR(255) NOT NULL, CHANGE motif_rejet motif_rejet VARCHAR(255) NOT NULL, CHANGE etat_rembousement etat_rembousement VARCHAR(255) NOT NULL, CHANGE date_saisie date_facture DATETIME NOT NULL');
    }
}
