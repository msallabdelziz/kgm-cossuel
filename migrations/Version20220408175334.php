<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408175334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agence ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE attestation ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE caissier ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE client ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comptable ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE controleur ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE daf ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE demande ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE departement ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE dossier ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE grille ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE installation ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE localite ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE paiement ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE piece_jointe ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE profil ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rapport ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE recu ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE referent ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE region ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tarif ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE visite ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD created_by VARCHAR(255) NOT NULL, ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_by VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE agence DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE agent DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE attestation DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE caissier DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE client DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE comptable DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE controleur DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE daf DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE demande DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE departement DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE dossier DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE grille DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE installation DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE localite DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE paiement DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE piece_jointe DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE profil DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE rapport DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE recu DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE referent DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE region DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE tarif DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE utilisateur DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
        $this->addSql('ALTER TABLE visite DROP created_at, DROP created_by, DROP updated_at, DROP updated_by');
    }
}
