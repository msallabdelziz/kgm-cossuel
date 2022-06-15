<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220602081815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFD7DC7B48');
        $this->addSql('DROP INDEX IDX_C0C0D9EFD7DC7B48 ON remboursement');
        $this->addSql('ALTER TABLE remboursement ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) DEFAULT NULL, CHANGE date_validation date_validation DATETIME DEFAULT NULL, CHANGE paiement_id_id paiement_id INT NOT NULL');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EF2A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('CREATE INDEX IDX_C0C0D9EF2A4C4478 ON remboursement (paiement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EF2A4C4478');
        $this->addSql('DROP INDEX IDX_C0C0D9EF2A4C4478 ON remboursement');
        $this->addSql('ALTER TABLE remboursement DROP created_at, DROP created_by, DROP updated_at, DROP updated_by, CHANGE date_validation date_validation DATE DEFAULT NULL, CHANGE paiement_id paiement_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFD7DC7B48 FOREIGN KEY (paiement_id_id) REFERENCES paiement (id)');
        $this->addSql('CREATE INDEX IDX_C0C0D9EFD7DC7B48 ON remboursement (paiement_id_id)');
    }
}
