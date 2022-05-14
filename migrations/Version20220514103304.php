<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220514103304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE remboursement (id INT AUTO_INCREMENT NOT NULL, paiement_id_id INT NOT NULL, date_demande DATE NOT NULL, date_validation DATE DEFAULT NULL, montant INT NOT NULL, valide TINYINT(1) NOT NULL, INDEX IDX_C0C0D9EFD7DC7B48 (paiement_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFD7DC7B48 FOREIGN KEY (paiement_id_id) REFERENCES paiement (id)');
        $this->addSql('ALTER TABLE dossier ADD date_affecte DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('ALTER TABLE dossier DROP date_affecte');
    }
}
