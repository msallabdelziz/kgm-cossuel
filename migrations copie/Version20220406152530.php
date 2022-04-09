<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406152530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affectations_agents (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, date_affectation DATE NOT NULL, INDEX IDX_73154BD725330D (agence_id), INDEX IDX_73154B3414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, localite_id INT DEFAULT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, type_piece VARCHAR(255) NOT NULL, num_piece INT NOT NULL, role VARCHAR(255) NOT NULL, INDEX IDX_C7440455924DD2B5 (localite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE droit (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_CB7AA751275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, agent_id INT DEFAULT NULL, profil_id INT DEFAULT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B33414710B (agent_id), INDEX IDX_1D1C63B3275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE affectations_agents ADD CONSTRAINT FK_73154BD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE affectations_agents ADD CONSTRAINT FK_73154B3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE droit ADD CONSTRAINT FK_CB7AA751275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B33414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('DROP TABLE affectation_agent');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE agence ADD adresse VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE droit DROP FOREIGN KEY FK_CB7AA751275ED078');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3275ED078');
        $this->addSql('CREATE TABLE affectation_agent (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, date_affectation DATE NOT NULL, INDEX IDX_FAB8FA35D725330D (agence_id), INDEX IDX_FAB8FA353414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, headers LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, queue_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE affectation_agent ADD CONSTRAINT FK_FAB8FA353414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE affectation_agent ADD CONSTRAINT FK_FAB8FA35D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('DROP TABLE affectations_agents');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE droit');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE agence DROP adresse');
    }
}
