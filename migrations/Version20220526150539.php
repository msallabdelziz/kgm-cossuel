<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220526150539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation ADD type_installation VARCHAR(255) DEFAULT NULL, DROP compteur_voisin, DROP bp, DROP puissance');
        $this->addSql('ALTER TABLE piece_jointe DROP FOREIGN KEY FK_AB5111D480E95E18');
        $this->addSql('DROP INDEX IDX_AB5111D480E95E18 ON piece_jointe');
        $this->addSql('ALTER TABLE piece_jointe CHANGE demande_id installation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D4167B88B4 FOREIGN KEY (installation_id) REFERENCES installation (id)');
        $this->addSql('CREATE INDEX IDX_AB5111D4167B88B4 ON piece_jointe (installation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE installation ADD bp VARCHAR(255) DEFAULT NULL, ADD puissance VARCHAR(255) DEFAULT NULL, CHANGE type_installation compteur_voisin VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE piece_jointe DROP FOREIGN KEY FK_AB5111D4167B88B4');
        $this->addSql('DROP INDEX IDX_AB5111D4167B88B4 ON piece_jointe');
        $this->addSql('ALTER TABLE piece_jointe CHANGE installation_id demande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D480E95E18 FOREIGN KEY (demande_id) REFERENCES demande (id)');
        $this->addSql('CREATE INDEX IDX_AB5111D480E95E18 ON piece_jointe (demande_id)');
    }
}
