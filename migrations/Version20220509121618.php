<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220509121618 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accueil (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_2994CBEE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE affectations_agents (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, date_affectation DATE NOT NULL, INDEX IDX_73154BD725330D (agence_id), INDEX IDX_73154B3414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agence (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_268B9C9DE7927C74 (email), INDEX IDX_268B9C9D275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attestation (id INT AUTO_INCREMENT NOT NULL, dossier_id INT DEFAULT NULL, numero INT NOT NULL, date_delivrance DATETIME NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_326EC63F611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE caissier (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1F038BC2E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comptable (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_5B644367E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE controleur (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_9E14F44E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE daf (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_68A82465E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, installation_id INT DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, cout INT DEFAULT NULL, date_creation DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, type_demande VARCHAR(255) DEFAULT NULL, date_validation DATETIME DEFAULT NULL, numero_passage INT NOT NULL, demande_parente INT DEFAULT NULL, id_paiement INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_2694D7A5FB88E14F (utilisateur_id), INDEX IDX_2694D7A5167B88B4 (installation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_C1765B6398260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_verification (id INT AUTO_INCREMENT NOT NULL, rubrique_id INT DEFAULT NULL, verification_id INT DEFAULT NULL, numero INT NOT NULL, objet_verification VARCHAR(255) NOT NULL, nature_conclusion VARCHAR(255) NOT NULL, libelle_conclusion VARCHAR(255) NOT NULL, INDEX IDX_46F2AF043BD38833 (rubrique_id), INDEX IDX_46F2AF041623CB0A (verification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, demande_id INT NOT NULL, respo_front_office_id INT DEFAULT NULL, controleur_id INT DEFAULT NULL, referent_id INT DEFAULT NULL, num INT NOT NULL, date_creation DATETIME NOT NULL, heure_creation DATETIME DEFAULT NULL, date_cloture DATETIME DEFAULT NULL, affecte TINYINT(1) DEFAULT NULL, visite TINYINT(1) DEFAULT NULL, rapport TINYINT(1) DEFAULT NULL, attestation TINYINT(1) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_3D48E03780E95E18 (demande_id), INDEX IDX_3D48E037F4CF9AD9 (respo_front_office_id), INDEX IDX_3D48E037B13E6101 (controleur_id), INDEX IDX_3D48E03735E47E35 (referent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE electricien (id INT AUTO_INCREMENT NOT NULL, localite_id INT DEFAULT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, type_piece VARCHAR(255) NOT NULL, num_piece VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_DFB53AEA924DD2B5 (localite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grille (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE installation (id INT AUTO_INCREMENT NOT NULL, proprietaire_id INT DEFAULT NULL, electricien_id INT DEFAULT NULL, localite_id INT DEFAULT NULL, type_construction_id INT DEFAULT NULL, nature_batiment_id INT DEFAULT NULL, nature_travaux_id INT DEFAULT NULL, usages VARCHAR(255) NOT NULL, etat VARCHAR(255) DEFAULT NULL, alimente VARCHAR(255) DEFAULT NULL, compteur_voisin VARCHAR(255) DEFAULT NULL, compteur VARCHAR(255) DEFAULT NULL, abonnement VARCHAR(255) DEFAULT NULL, bp VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, nom_site VARCHAR(255) DEFAULT NULL, lattitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, date_installation DATETIME DEFAULT NULL, grst_reseau VARCHAR(255) DEFAULT NULL, neuf15 VARCHAR(255) DEFAULT NULL, existant15 VARCHAR(255) DEFAULT NULL, neuf25 VARCHAR(255) DEFAULT NULL, existant25 VARCHAR(255) DEFAULT NULL, neuf_autre VARCHAR(255) DEFAULT NULL, existant_autre VARCHAR(255) DEFAULT NULL, titre_prop VARCHAR(255) DEFAULT NULL, intervenant VARCHAR(255) DEFAULT NULL, intervenant_autre VARCHAR(255) DEFAULT NULL, collectif VARCHAR(255) DEFAULT NULL, logement VARCHAR(255) DEFAULT NULL, priece VARCHAR(255) DEFAULT NULL, puissance VARCHAR(255) DEFAULT NULL, activite VARCHAR(255) DEFAULT NULL, niveau VARCHAR(255) DEFAULT NULL, habitation VARCHAR(255) DEFAULT NULL, step INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_1CBA6AB176C50E4A (proprietaire_id), INDEX IDX_1CBA6AB15C9609E3 (electricien_id), INDEX IDX_1CBA6AB1924DD2B5 (localite_id), INDEX IDX_1CBA6AB1387C850E (type_construction_id), INDEX IDX_1CBA6AB1B871F14F (nature_batiment_id), INDEX IDX_1CBA6AB178EB7775 (nature_travaux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localite (id INT AUTO_INCREMENT NOT NULL, departement_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_F5D7E4A9CCF9E01E (departement_id), INDEX IDX_F5D7E4A9D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nature_batiment (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nature_travaux (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, comptable_id INT DEFAULT NULL, observation VARCHAR(255) DEFAULT NULL, date_paiement DATETIME DEFAULT NULL, date_saisie DATETIME NOT NULL, mode VARCHAR(255) NOT NULL, reference VARCHAR(255) DEFAULT NULL, motif_remboursement VARCHAR(255) DEFAULT NULL, motif_rejet VARCHAR(255) DEFAULT NULL, etat_rembousement VARCHAR(255) DEFAULT NULL, paiement_effectue TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_B1DC7A1E80E95E18 (demande_id), INDEX IDX_B1DC7A1EBA52A149 (comptable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piece_jointe (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, fichier VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_AB5111D480E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE point_nom_conforme (id INT AUTO_INCREMENT NOT NULL, detail_verification_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_D84A4F411B645EBC (detail_verification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, localite_id INT DEFAULT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, type_piece VARCHAR(255) NOT NULL, num_piece VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_69E399D6924DD2B5 (localite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recu (id INT AUTO_INCREMENT NOT NULL, paiement_id INT DEFAULT NULL, caissier_id INT DEFAULT NULL, numero INT NOT NULL, date_edition DATETIME NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_C0D103172A4C4478 (paiement_id), INDEX IDX_C0D10317B514973B (caissier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referent (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, id_agence INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_FE9AAC6CE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE respo_front_office (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubrique (id INT AUTO_INCREMENT NOT NULL, rapport_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_8FA4097C1DFBCC46 (rapport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, usages VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, cout1 INT NOT NULL, cout2 INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_construction (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, usages VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, id_type INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, telephone VARCHAR(50) DEFAULT NULL, email VARCHAR(100) NOT NULL, is_verified TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B3AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE verification (id INT AUTO_INCREMENT NOT NULL, visite_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, INDEX IDX_5AF1C50BC1C5DC59 (visite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, dossier_id INT DEFAULT NULL, date_visite DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_by VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_B09C8CBB611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE affectations_agents ADD CONSTRAINT FK_73154BD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE affectations_agents ADD CONSTRAINT FK_73154B3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE attestation ADD CONSTRAINT FK_326EC63F611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5167B88B4 FOREIGN KEY (installation_id) REFERENCES installation (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B6398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT FK_46F2AF043BD38833 FOREIGN KEY (rubrique_id) REFERENCES rubrique (id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT FK_46F2AF041623CB0A FOREIGN KEY (verification_id) REFERENCES verification (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E03780E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037F4CF9AD9 FOREIGN KEY (respo_front_office_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037B13E6101 FOREIGN KEY (controleur_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E03735E47E35 FOREIGN KEY (referent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE electricien ADD CONSTRAINT FK_DFB53AEA924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB176C50E4A FOREIGN KEY (proprietaire_id) REFERENCES proprietaire (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB15C9609E3 FOREIGN KEY (electricien_id) REFERENCES electricien (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1387C850E FOREIGN KEY (type_construction_id) REFERENCES type_construction (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1B871F14F FOREIGN KEY (nature_batiment_id) REFERENCES nature_batiment (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB178EB7775 FOREIGN KEY (nature_travaux_id) REFERENCES nature_travaux (id)');
        $this->addSql('ALTER TABLE localite ADD CONSTRAINT FK_F5D7E4A9CCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id)');
        $this->addSql('ALTER TABLE localite ADD CONSTRAINT FK_F5D7E4A9D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E80E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EBA52A149 FOREIGN KEY (comptable_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D480E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE point_nom_conforme ADD CONSTRAINT FK_D84A4F411B645EBC FOREIGN KEY (detail_verification_id) REFERENCES detail_verification (id)');
        $this->addSql('ALTER TABLE proprietaire ADD CONSTRAINT FK_69E399D6924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE recu ADD CONSTRAINT FK_C0D103172A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('ALTER TABLE recu ADD CONSTRAINT FK_C0D10317B514973B FOREIGN KEY (caissier_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rubrique ADD CONSTRAINT FK_8FA4097C1DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
        $this->addSql('ALTER TABLE verification ADD CONSTRAINT FK_5AF1C50BC1C5DC59 FOREIGN KEY (visite_id) REFERENCES visite (id)');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectations_agents DROP FOREIGN KEY FK_73154BD725330D');
        $this->addSql('ALTER TABLE localite DROP FOREIGN KEY FK_F5D7E4A9D725330D');
        $this->addSql('ALTER TABLE affectations_agents DROP FOREIGN KEY FK_73154B3414710B');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037F4CF9AD9');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037B13E6101');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E03735E47E35');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EBA52A149');
        $this->addSql('ALTER TABLE recu DROP FOREIGN KEY FK_C0D10317B514973B');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E03780E95E18');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E80E95E18');
        $this->addSql('ALTER TABLE piece_jointe DROP FOREIGN KEY FK_AB5111D480E95E18');
        $this->addSql('ALTER TABLE localite DROP FOREIGN KEY FK_F5D7E4A9CCF9E01E');
        $this->addSql('ALTER TABLE point_nom_conforme DROP FOREIGN KEY FK_D84A4F411B645EBC');
        $this->addSql('ALTER TABLE attestation DROP FOREIGN KEY FK_326EC63F611C0C56');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB611C0C56');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB15C9609E3');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5167B88B4');
        $this->addSql('ALTER TABLE electricien DROP FOREIGN KEY FK_DFB53AEA924DD2B5');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB1924DD2B5');
        $this->addSql('ALTER TABLE proprietaire DROP FOREIGN KEY FK_69E399D6924DD2B5');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB1B871F14F');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB178EB7775');
        $this->addSql('ALTER TABLE recu DROP FOREIGN KEY FK_C0D103172A4C4478');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D275ED078');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB176C50E4A');
        $this->addSql('ALTER TABLE rubrique DROP FOREIGN KEY FK_8FA4097C1DFBCC46');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B6398260155');
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY FK_46F2AF043BD38833');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB1387C850E');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5FB88E14F');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY FK_46F2AF041623CB0A');
        $this->addSql('ALTER TABLE verification DROP FOREIGN KEY FK_5AF1C50BC1C5DC59');
        $this->addSql('DROP TABLE accueil');
        $this->addSql('DROP TABLE affectations_agents');
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE attestation');
        $this->addSql('DROP TABLE caissier');
        $this->addSql('DROP TABLE comptable');
        $this->addSql('DROP TABLE controleur');
        $this->addSql('DROP TABLE daf');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE detail_verification');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('DROP TABLE electricien');
        $this->addSql('DROP TABLE grille');
        $this->addSql('DROP TABLE installation');
        $this->addSql('DROP TABLE localite');
        $this->addSql('DROP TABLE nature_batiment');
        $this->addSql('DROP TABLE nature_travaux');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE piece_jointe');
        $this->addSql('DROP TABLE point_nom_conforme');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE recu');
        $this->addSql('DROP TABLE referent');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE respo_front_office');
        $this->addSql('DROP TABLE rubrique');
        $this->addSql('DROP TABLE tarif');
        $this->addSql('DROP TABLE type_construction');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE verification');
        $this->addSql('DROP TABLE visite');
    }
}
