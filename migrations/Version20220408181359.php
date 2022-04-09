<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408181359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE agence CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE agent CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE attestation CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE caissier CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE comptable CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE controleur CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE daf CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE demande CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE departement CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE grille CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE installation CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE localite CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE piece_jointe CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE profil CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rapport CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE recu CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE referent CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE region CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tarif CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B33414710B');
        $this->addSql('DROP INDEX UNIQ_1D1C63B33414710B ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD type VARCHAR(255) NOT NULL, ADD id_type INT NOT NULL, DROP agent_id, CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE visite CHANGE updated_by updated_by VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agence CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE attestation CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE caissier CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE client CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comptable CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE controleur CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE daf CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE demande CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE departement CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE dossier CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE grille CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE installation CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE localite CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE piece_jointe CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE profil CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rapport CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE recu CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE referent CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE region CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tarif CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD agent_id INT DEFAULT NULL, DROP type, DROP id_type, CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B33414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B33414710B ON utilisateur (agent_id)');
        $this->addSql('ALTER TABLE visite CHANGE updated_by updated_by VARCHAR(255) NOT NULL');
    }
}
