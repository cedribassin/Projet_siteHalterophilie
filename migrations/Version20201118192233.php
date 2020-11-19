<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201118192233 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE phase (id INT AUTO_INCREMENT NOT NULL, mvt_technique_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, libelle LONGTEXT NOT NULL, image_name VARCHAR(255) NOT NULL, INDEX IDX_B1BDD6CB41705986 (mvt_technique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE phase ADD CONSTRAINT FK_B1BDD6CB41705986 FOREIGN KEY (mvt_technique_id) REFERENCES mouvement_technique (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE phase');
    }
}
