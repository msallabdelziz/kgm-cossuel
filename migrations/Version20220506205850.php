<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220506205850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037F4CF9AD9 FOREIGN KEY (respo_front_office_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037B13E6101 FOREIGN KEY (controleur_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E03735E47E35 FOREIGN KEY (referent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EBA52A149 FOREIGN KEY (comptable_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE recu ADD CONSTRAINT FK_C0D10317B514973B FOREIGN KEY (caissier_id) REFERENCES agent (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037F4CF9AD9');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037B13E6101');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E03735E47E35');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EBA52A149');
        $this->addSql('ALTER TABLE recu DROP FOREIGN KEY FK_C0D10317B514973B');
    }
}
