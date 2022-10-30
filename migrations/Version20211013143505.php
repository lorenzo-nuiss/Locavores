<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211013143505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agriculteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nom_gerant VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postal INT NOT NULL, description VARCHAR(255) NOT NULL, descriptif LONGTEXT NOT NULL, identifiant VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agriculteur_categorie (agriculteur_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_FF5DD6D07EBB810E (agriculteur_id), INDEX IDX_FF5DD6D0BCF5E72D (categorie_id), PRIMARY KEY(agriculteur_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agriculteur_categorie ADD CONSTRAINT FK_FF5DD6D07EBB810E FOREIGN KEY (agriculteur_id) REFERENCES agriculteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agriculteur_categorie ADD CONSTRAINT FK_FF5DD6D0BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agriculteur_categorie DROP FOREIGN KEY FK_FF5DD6D07EBB810E');
        $this->addSql('ALTER TABLE agriculteur_categorie DROP FOREIGN KEY FK_FF5DD6D0BCF5E72D');
        $this->addSql('DROP TABLE agriculteur');
        $this->addSql('DROP TABLE agriculteur_categorie');
        $this->addSql('DROP TABLE categorie');
    }
}
