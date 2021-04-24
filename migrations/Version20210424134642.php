<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210424134642 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, intensite VARCHAR(255) NOT NULL, nb_serie VARCHAR(255) NOT NULL, nb_repetition VARCHAR(255) NOT NULL, recuperation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seance_mouvement (seance_id INT NOT NULL, mouvement_id INT NOT NULL, INDEX IDX_563BEB0E3797A94 (seance_id), INDEX IDX_563BEB0ECD1C222 (mouvement_id), PRIMARY KEY(seance_id, mouvement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE seance_mouvement ADD CONSTRAINT FK_563BEB0E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE seance_mouvement ADD CONSTRAINT FK_563BEB0ECD1C222 FOREIGN KEY (mouvement_id) REFERENCES mouvement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance_mouvement DROP FOREIGN KEY FK_563BEB0E3797A94');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE seance_mouvement');
    }
}
