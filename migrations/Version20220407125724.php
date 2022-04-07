<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407125724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_2694D7A5FB88E14F ON demande (utilisateur_id)');
        $this->addSql('ALTER TABLE dossier ADD respo_front_office_id INT DEFAULT NULL, ADD controleur_id INT DEFAULT NULL, ADD referent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037F4CF9AD9 FOREIGN KEY (respo_front_office_id) REFERENCES respo_front_office (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037B13E6101 FOREIGN KEY (controleur_id) REFERENCES controleur (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E03735E47E35 FOREIGN KEY (referent_id) REFERENCES referent (id)');
        $this->addSql('CREATE INDEX IDX_3D48E037F4CF9AD9 ON dossier (respo_front_office_id)');
        $this->addSql('CREATE INDEX IDX_3D48E037B13E6101 ON dossier (controleur_id)');
        $this->addSql('CREATE INDEX IDX_3D48E03735E47E35 ON dossier (referent_id)');
        $this->addSql('ALTER TABLE paiement ADD comptable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EBA52A149 FOREIGN KEY (comptable_id) REFERENCES comptable (id)');
        $this->addSql('CREATE INDEX IDX_B1DC7A1EBA52A149 ON paiement (comptable_id)');
        $this->addSql('ALTER TABLE recu ADD caissier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recu ADD CONSTRAINT FK_C0D10317B514973B FOREIGN KEY (caissier_id) REFERENCES caissier (id)');
        $this->addSql('CREATE INDEX IDX_C0D10317B514973B ON recu (caissier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5FB88E14F');
        $this->addSql('DROP INDEX IDX_2694D7A5FB88E14F ON demande');
        $this->addSql('ALTER TABLE demande DROP utilisateur_id');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037F4CF9AD9');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037B13E6101');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E03735E47E35');
        $this->addSql('DROP INDEX IDX_3D48E037F4CF9AD9 ON dossier');
        $this->addSql('DROP INDEX IDX_3D48E037B13E6101 ON dossier');
        $this->addSql('DROP INDEX IDX_3D48E03735E47E35 ON dossier');
        $this->addSql('ALTER TABLE dossier DROP respo_front_office_id, DROP controleur_id, DROP referent_id');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EBA52A149');
        $this->addSql('DROP INDEX IDX_B1DC7A1EBA52A149 ON paiement');
        $this->addSql('ALTER TABLE paiement DROP comptable_id');
        $this->addSql('ALTER TABLE recu DROP FOREIGN KEY FK_C0D10317B514973B');
        $this->addSql('DROP INDEX IDX_C0D10317B514973B ON recu');
        $this->addSql('ALTER TABLE recu DROP caissier_id');
    }
}
