<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211027140450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, agriculteur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_E01FBE6ABCF5E72D (categorie_id), INDEX IDX_E01FBE6A7EBB810E (agriculteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A7EBB810E FOREIGN KEY (agriculteur_id) REFERENCES agriculteur (id)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27C8121CE9');
        $this->addSql('DROP INDEX IDX_29A5EC27C8121CE9 ON produit');
        $this->addSql('ALTER TABLE produit ADD image VARCHAR(255) NOT NULL, DROP nom_id, CHANGE agriculteur nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE images');
        $this->addSql('ALTER TABLE produit ADD nom_id INT DEFAULT NULL, ADD agriculteur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP nom, DROP image');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27C8121CE9 FOREIGN KEY (nom_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27C8121CE9 ON produit (nom_id)');
    }
}
