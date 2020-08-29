<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827114746 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_CB988C6F12469DE2 ON annonces (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY FK_CB988C6F12469DE2');
        $this->addSql('DROP INDEX IDX_CB988C6F12469DE2 ON annonces');
        $this->addSql('ALTER TABLE annonces DROP category_id');
    }
}
