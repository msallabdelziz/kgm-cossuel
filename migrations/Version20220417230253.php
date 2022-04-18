<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417230253 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB176C50E4A');
        $this->addSql('ALTER TABLE installation DROP FOREIGN KEY FK_1CBA6AB15C9609E3');
        $this->addSql('DROP INDEX IDX_1CBA6AB15C9609E3 ON installation');
        $this->addSql('DROP INDEX IDX_1CBA6AB176C50E4A ON installation');
        $this->addSql('ALTER TABLE installation ADD proprietaire INT DEFAULT NULL, ADD electricien INT DEFAULT NULL, DROP proprietaire_id, DROP electricien_id, CHANGE etat etat VARCHAR(255) DEFAULT NULL, CHANGE compteur_voisin compteur_voisin VARCHAR(255) DEFAULT NULL, CHANGE compteur compteur VARCHAR(255) DEFAULT NULL, CHANGE abonnement abonnement VARCHAR(255) DEFAULT NULL, CHANGE bp bp VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE nom_site nom_site VARCHAR(255) DEFAULT NULL, CHANGE lattitude lattitude VARCHAR(255) DEFAULT NULL, CHANGE longitude longitude VARCHAR(255) DEFAULT NULL, CHANGE date_installation date_installation DATETIME DEFAULT NULL, CHANGE grst_reseau grst_reseau VARCHAR(255) DEFAULT NULL, CHANGE neuf15 neuf15 VARCHAR(255) DEFAULT NULL, CHANGE existant15 existant15 VARCHAR(255) DEFAULT NULL, CHANGE neuf25 neuf25 VARCHAR(255) DEFAULT NULL, CHANGE existant25 existant25 VARCHAR(255) DEFAULT NULL, CHANGE neuf_autre neuf_autre VARCHAR(255) DEFAULT NULL, CHANGE existant_autre existant_autre VARCHAR(255) DEFAULT NULL, CHANGE titre_prop titre_prop VARCHAR(255) DEFAULT NULL, CHANGE intervenant intervenant VARCHAR(255) DEFAULT NULL, CHANGE intervenant_autre intervenant_autre VARCHAR(255) DEFAULT NULL, CHANGE collectif collectif VARCHAR(255) DEFAULT NULL, CHANGE logement logement VARCHAR(255) DEFAULT NULL, CHANGE priece priece VARCHAR(255) DEFAULT NULL, CHANGE puissance puissance VARCHAR(255) DEFAULT NULL, CHANGE activite activite VARCHAR(255) DEFAULT NULL, CHANGE niveau niveau VARCHAR(255) DEFAULT NULL, CHANGE habitation habitation VARCHAR(255) DEFAULT NULL, CHANGE alimente alimente VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation ADD proprietaire_id INT DEFAULT NULL, ADD electricien_id INT DEFAULT NULL, DROP proprietaire, DROP electricien, CHANGE etat etat VARCHAR(255) NOT NULL, CHANGE alimente alimente VARCHAR(255) NOT NULL, CHANGE compteur_voisin compteur_voisin VARCHAR(255) NOT NULL, CHANGE compteur compteur VARCHAR(255) NOT NULL, CHANGE abonnement abonnement VARCHAR(255) NOT NULL, CHANGE bp bp VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE nom_site nom_site VARCHAR(255) NOT NULL, CHANGE lattitude lattitude VARCHAR(255) NOT NULL, CHANGE longitude longitude VARCHAR(255) NOT NULL, CHANGE date_installation date_installation DATETIME NOT NULL, CHANGE grst_reseau grst_reseau VARCHAR(255) NOT NULL, CHANGE neuf15 neuf15 VARCHAR(255) NOT NULL, CHANGE existant15 existant15 VARCHAR(255) NOT NULL, CHANGE neuf25 neuf25 VARCHAR(255) NOT NULL, CHANGE existant25 existant25 VARCHAR(255) NOT NULL, CHANGE neuf_autre neuf_autre VARCHAR(255) NOT NULL, CHANGE existant_autre existant_autre VARCHAR(255) NOT NULL, CHANGE titre_prop titre_prop VARCHAR(255) NOT NULL, CHANGE intervenant intervenant VARCHAR(255) NOT NULL, CHANGE intervenant_autre intervenant_autre VARCHAR(255) NOT NULL, CHANGE collectif collectif VARCHAR(255) NOT NULL, CHANGE logement logement VARCHAR(255) NOT NULL, CHANGE priece priece VARCHAR(255) NOT NULL, CHANGE puissance puissance VARCHAR(255) NOT NULL, CHANGE activite activite VARCHAR(255) NOT NULL, CHANGE niveau niveau VARCHAR(255) NOT NULL, CHANGE habitation habitation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB176C50E4A FOREIGN KEY (proprietaire_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE installation ADD CONSTRAINT FK_1CBA6AB15C9609E3 FOREIGN KEY (electricien_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB15C9609E3 ON installation (electricien_id)');
        $this->addSql('CREATE INDEX IDX_1CBA6AB176C50E4A ON installation (proprietaire_id)');
    }
}
