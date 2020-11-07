<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201107115404 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_mouvement (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_mouvement_mouvement (type_mouvement_id INT NOT NULL, mouvement_id INT NOT NULL, INDEX IDX_2EDF229C6B927827 (type_mouvement_id), INDEX IDX_2EDF229CECD1C222 (mouvement_id), PRIMARY KEY(type_mouvement_id, mouvement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type_mouvement_mouvement ADD CONSTRAINT FK_2EDF229C6B927827 FOREIGN KEY (type_mouvement_id) REFERENCES type_mouvement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_mouvement_mouvement ADD CONSTRAINT FK_2EDF229CECD1C222 FOREIGN KEY (mouvement_id) REFERENCES mouvement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_mouvement_mouvement DROP FOREIGN KEY FK_2EDF229C6B927827');
        $this->addSql('DROP TABLE type_mouvement');
        $this->addSql('DROP TABLE type_mouvement_mouvement');
    }
}
