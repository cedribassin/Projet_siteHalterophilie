<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418144654 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, nombre_serie INT NOT NULL, nombre_reps INT NOT NULL, intensite INT NOT NULL, recuperation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mouvement ADD seance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_5B51FC3EE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('CREATE INDEX IDX_5B51FC3EE3797A94 ON mouvement (seance_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_5B51FC3EE3797A94');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP INDEX IDX_5B51FC3EE3797A94 ON mouvement');
        $this->addSql('ALTER TABLE mouvement DROP seance_id');
    }
}
