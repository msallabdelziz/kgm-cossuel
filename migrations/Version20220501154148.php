<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220501154148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_2994CBEA625945B ON accueil');
        $this->addSql('DROP INDEX UNIQ_2994CBE14B78418 ON accueil');
        $this->addSql('ALTER TABLE accueil ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_268B9C9DA625945B ON agent');
        $this->addSql('DROP INDEX UNIQ_268B9C9D14B78418 ON agent');
        $this->addSql('ALTER TABLE agent ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_1F038BC2A625945B ON caissier');
        $this->addSql('DROP INDEX UNIQ_1F038BC214B78418 ON caissier');
        $this->addSql('ALTER TABLE caissier ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_5B644367A625945B ON comptable');
        $this->addSql('DROP INDEX UNIQ_5B64436714B78418 ON comptable');
        $this->addSql('ALTER TABLE comptable ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_9E14F44A625945B ON controleur');
        $this->addSql('DROP INDEX UNIQ_9E14F4414B78418 ON controleur');
        $this->addSql('ALTER TABLE controleur ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_68A82465A625945B ON daf');
        $this->addSql('DROP INDEX UNIQ_68A8246514B78418 ON daf');
        $this->addSql('ALTER TABLE daf ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_FE9AAC6CA625945B ON referent');
        $this->addSql('DROP INDEX UNIQ_FE9AAC6C14B78418 ON referent');
        $this->addSql('ALTER TABLE referent ADD id_agence INT NOT NULL, ADD fonction VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2994CBEA625945B ON accueil (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2994CBE14B78418 ON accueil (photo)');
        $this->addSql('ALTER TABLE agent DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9DA625945B ON agent (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9D14B78418 ON agent (photo)');
        $this->addSql('ALTER TABLE caissier DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F038BC2A625945B ON caissier (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F038BC214B78418 ON caissier (photo)');
        $this->addSql('ALTER TABLE comptable DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B644367A625945B ON comptable (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B64436714B78418 ON comptable (photo)');
        $this->addSql('ALTER TABLE controleur DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E14F44A625945B ON controleur (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E14F4414B78418 ON controleur (photo)');
        $this->addSql('ALTER TABLE daf DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_68A82465A625945B ON daf (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_68A8246514B78418 ON daf (photo)');
        $this->addSql('ALTER TABLE referent DROP id_agence, DROP fonction');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE9AAC6CA625945B ON referent (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE9AAC6C14B78418 ON referent (photo)');
    }
}
