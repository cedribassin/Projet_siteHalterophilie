<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201127104246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etape ADD apprentissage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etape ADD CONSTRAINT FK_285F75DD7225732A FOREIGN KEY (apprentissage_id) REFERENCES apprentissage (id)');
        $this->addSql('CREATE INDEX IDX_285F75DD7225732A ON etape (apprentissage_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etape DROP FOREIGN KEY FK_285F75DD7225732A');
        $this->addSql('DROP INDEX IDX_285F75DD7225732A ON etape');
        $this->addSql('ALTER TABLE etape DROP apprentissage_id');
    }
}
