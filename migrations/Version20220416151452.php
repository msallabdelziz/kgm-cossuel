<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220416151452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2994CBEA625945B ON accueil (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2994CBEE7927C74 ON accueil (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2994CBE14B78418 ON accueil (photo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9DA625945B ON agent (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9DE7927C74 ON agent (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9D14B78418 ON agent (photo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F038BC2A625945B ON caissier (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F038BC2E7927C74 ON caissier (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F038BC214B78418 ON caissier (photo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B644367A625945B ON comptable (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B644367E7927C74 ON comptable (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B64436714B78418 ON comptable (photo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E14F44A625945B ON controleur (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E14F44E7927C74 ON controleur (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E14F4414B78418 ON controleur (photo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_68A82465A625945B ON daf (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_68A82465E7927C74 ON daf (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_68A8246514B78418 ON daf (photo)');
        $this->addSql('ALTER TABLE installation ADD activite VARCHAR(255) NOT NULL, ADD niveau VARCHAR(255) NOT NULL, ADD habitation VARCHAR(255) NOT NULL, CHANGE date_installation date_installation DATETIME NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE9AAC6CA625945B ON referent (prenom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE9AAC6CE7927C74 ON referent (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE9AAC6C14B78418 ON referent (photo)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_2994CBEA625945B ON accueil');
        $this->addSql('DROP INDEX UNIQ_2994CBEE7927C74 ON accueil');
        $this->addSql('DROP INDEX UNIQ_2994CBE14B78418 ON accueil');
        $this->addSql('DROP INDEX UNIQ_268B9C9DA625945B ON agent');
        $this->addSql('DROP INDEX UNIQ_268B9C9DE7927C74 ON agent');
        $this->addSql('DROP INDEX UNIQ_268B9C9D14B78418 ON agent');
        $this->addSql('DROP INDEX UNIQ_1F038BC2A625945B ON caissier');
        $this->addSql('DROP INDEX UNIQ_1F038BC2E7927C74 ON caissier');
        $this->addSql('DROP INDEX UNIQ_1F038BC214B78418 ON caissier');
        $this->addSql('DROP INDEX UNIQ_5B644367A625945B ON comptable');
        $this->addSql('DROP INDEX UNIQ_5B644367E7927C74 ON comptable');
        $this->addSql('DROP INDEX UNIQ_5B64436714B78418 ON comptable');
        $this->addSql('DROP INDEX UNIQ_9E14F44A625945B ON controleur');
        $this->addSql('DROP INDEX UNIQ_9E14F44E7927C74 ON controleur');
        $this->addSql('DROP INDEX UNIQ_9E14F4414B78418 ON controleur');
        $this->addSql('DROP INDEX UNIQ_68A82465A625945B ON daf');
        $this->addSql('DROP INDEX UNIQ_68A82465E7927C74 ON daf');
        $this->addSql('DROP INDEX UNIQ_68A8246514B78418 ON daf');
        $this->addSql('ALTER TABLE installation DROP activite, DROP niveau, DROP habitation, CHANGE date_installation date_installation VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_FE9AAC6CA625945B ON referent');
        $this->addSql('DROP INDEX UNIQ_FE9AAC6CE7927C74 ON referent');
        $this->addSql('DROP INDEX UNIQ_FE9AAC6C14B78418 ON referent');
    }
}
