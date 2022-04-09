<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407110439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attestation (id INT AUTO_INCREMENT NOT NULL, dossier_id INT DEFAULT NULL, numero INT NOT NULL, date_delivrance DATETIME NOT NULL, UNIQUE INDEX UNIQ_326EC63F611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE daf (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, numero INT NOT NULL, date_creation DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, type_demande VARCHAR(255) NOT NULL, date_validation DATETIME NOT NULL, numero_passage INT NOT NULL, INDEX IDX_2694D7A580E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_verification (id INT AUTO_INCREMENT NOT NULL, rubrique_id INT DEFAULT NULL, verification_id INT DEFAULT NULL, numero INT NOT NULL, objet_verification VARCHAR(255) NOT NULL, nature_conclusion VARCHAR(255) NOT NULL, libelle_conclusion VARCHAR(255) NOT NULL, INDEX IDX_46F2AF043BD38833 (rubrique_id), INDEX IDX_46F2AF041623CB0A (verification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, demande_id INT NOT NULL, num INT NOT NULL, date_creation DATETIME NOT NULL, heure_creation DATETIME NOT NULL, date_cloture DATETIME NOT NULL, affecte TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_3D48E03780E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grille (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE installation (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, localite_id INT DEFAULT NULL, type_construction_id INT DEFAULT NULL, nature_batiment_id INT DEFAULT NULL, nature_travaux_id INT DEFAULT NULL, demande_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, compteur_voisin VARCHAR(255) NOT NULL, compteur VARCHAR(255) NOT NULL, abonnement VARCHAR(255) NOT NULL, bp VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, nom_site VARCHAR(255) NOT NULL, lattitude VARCHAR(255) NOT NULL, longitude VARCHAR(255) NOT NULL, date_installation VARCHAR(255) NOT NULL, grst_reseau VARCHAR(255) NOT NULL, neuf15 VARCHAR(255) NOT NULL, existant15 VARCHAR(255) NOT NULL, neuf25 VARCHAR(255) NOT NULL, existant25 VARCHAR(255) NOT NULL, neuf_autre VARCHAR(255) NOT NULL, existant_autre VARCHAR(255) NOT NULL, titre_prop VARCHAR(255) NOT NULL, intervenant VARCHAR(255) NOT NULL, intervenant_autre VARCHAR(255) NOT NULL, collectif VARCHAR(255) NOT NULL, logement VARCHAR(255) NOT NULL, priece VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, INDEX IDX_1CBA6AB119EB6921 (client_id), INDEX IDX_1CBA6AB1924DD2B5 (localite_id), INDEX IDX_1CBA6AB1387C850E (type_construction_id), INDEX IDX_1CBA6AB1B871F14F (nature_batiment_id), INDEX IDX_1CBA6AB178EB7775 (nature_travaux_id), INDEX IDX_1CBA6AB180E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nature_batiment (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nature_travaux (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, date_paiement DATETIME NOT NULL, mode VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, motif_remboursement VARCHAR(255) NOT NULL, motif_rejet VARCHAR(255) NOT NULL, etat_rembousement VARCHAR(255) NOT NULL, date_facture DATETIME NOT NULL, paiement_effectue TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_B1DC7A1E80E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piece_jointe (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, fichier VARCHAR(255) NOT NULL, INDEX IDX_AB5111D480E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE point_nom_conforme (id INT AUTO_INCREMENT NOT NULL, detail_verification_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_D84A4F411B645EBC (detail_verification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recu (id INT AUTO_INCREMENT NOT NULL, paiement_id INT DEFAULT NULL, numero INT NOT NULL, date_edition DATETIME NOT NULL, UNIQUE INDEX UNIQ_C0D103172A4C4478 (paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubrique (id INT AUTO_INCREMENT NOT NULL, rapport_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_8FA4097C1DFBCC46 (rapport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, usages VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, cout_premier_ins INT NOT NULL, cout_deuxieme_ins INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_construction (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, usages VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE verification (id INT AUTO_INCREMENT NOT NULL, visite_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, INDEX IDX_5AF1C50BC1C5DC59 (visite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, dossier_id INT DEFAULT NULL, date_visite DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_B09C8CBB611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attestation ADD CONSTRAINT FK_326EC63F611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A580E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT FK_46F2AF043BD38833 FOREIGN KEY (rubrique_id) REFERENCES rubrique (id)');
        $this->addSql('ALTER TABLE detail_verification ADD CONSTRAINT FK_46F2AF041623CB0A FOREIGN KEY (verification_id) REFERENCES verification (id)');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E03780E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB119EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1387C850E FOREIGN KEY (type_construction_id) REFERENCES type_construction (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB1B871F14F FOREIGN KEY (nature_batiment_id) REFERENCES nature_batiment (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB178EB7775 FOREIGN KEY (nature_travaux_id) REFERENCES nature_travaux (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB180E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E80E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D480E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE point_nom_conforme ADD CONSTRAINT FK_D84A4F411B645EBC FOREIGN KEY (detail_verification_id) REFERENCES detail_verification (id)');
        $this->addSql('ALTER TABLE recu ADD CONSTRAINT FK_C0D103172A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('ALTER TABLE rubrique ADD CONSTRAINT FK_8FA4097C1DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
        $this->addSql('ALTER TABLE verification ADD CONSTRAINT FK_5AF1C50BC1C5DC59 FOREIGN KEY (visite_id) REFERENCES visite (id)');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
        $this->addSql('ALTER TABLE client ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455FB88E14F ON client (utilisateur_id)');
        $this->addSql('ALTER TABLE departement ADD code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE localite ADD code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE region ADD code VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A580E95E18');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E03780E95E18');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB180E95E18');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E80E95E18');
        $this->addSql('ALTER TABLE piece_jointe DROP FOREIGN KEY FK_AB5111D480E95E18');
        $this->addSql('ALTER TABLE point_nom_conforme DROP FOREIGN KEY FK_D84A4F411B645EBC');
        $this->addSql('ALTER TABLE attestation DROP FOREIGN KEY FK_326EC63F611C0C56');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB611C0C56');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB1B871F14F');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB178EB7775');
        $this->addSql('ALTER TABLE recu DROP FOREIGN KEY FK_C0D103172A4C4478');
        $this->addSql('ALTER TABLE rubrique DROP FOREIGN KEY FK_8FA4097C1DFBCC46');
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY FK_46F2AF043BD38833');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB1387C850E');
        $this->addSql('ALTER TABLE detail_verification DROP FOREIGN KEY FK_46F2AF041623CB0A');
        $this->addSql('ALTER TABLE verification DROP FOREIGN KEY FK_5AF1C50BC1C5DC59');
        $this->addSql('DROP TABLE attestation');
        $this->addSql('DROP TABLE daf');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE detail_verification');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('DROP TABLE grille');
        $this->addSql('DROP TABLE installation');
        $this->addSql('DROP TABLE nature_batiment');
        $this->addSql('DROP TABLE nature_travaux');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE piece_jointe');
        $this->addSql('DROP TABLE point_nom_conforme');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE recu');
        $this->addSql('DROP TABLE rubrique');
        $this->addSql('DROP TABLE tarif');
        $this->addSql('DROP TABLE type_construction');
        $this->addSql('DROP TABLE verification');
        $this->addSql('DROP TABLE visite');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455FB88E14F');
        $this->addSql('DROP INDEX UNIQ_C7440455FB88E14F ON client');
        $this->addSql('ALTER TABLE client DROP utilisateur_id');
        $this->addSql('ALTER TABLE departement DROP code');
        $this->addSql('ALTER TABLE localite DROP code');
        $this->addSql('ALTER TABLE region DROP code');
    }
}
