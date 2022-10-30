<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221023144751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agriculteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nom_domaine VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postal INT NOT NULL, descriptif LONGTEXT NOT NULL, password VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, tel_portable VARCHAR(255) DEFAULT NULL, tel_fixe VARCHAR(255) DEFAULT NULL, is_verified TINYINT(1) NOT NULL, photo VARCHAR(255) DEFAULT NULL, activation_token VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agriculteur_categorie (agriculteur_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_FF5DD6D07EBB810E (agriculteur_id), INDEX IDX_FF5DD6D0BCF5E72D (categorie_id), PRIMARY KEY(agriculteur_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_info (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, tel_fixe VARCHAR(255) DEFAULT NULL, tel_portable VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, agriculteur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_E01FBE6ABCF5E72D (categorie_id), INDEX IDX_E01FBE6A7EBB810E (agriculteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agriculteur_categorie ADD CONSTRAINT FK_FF5DD6D07EBB810E FOREIGN KEY (agriculteur_id) REFERENCES agriculteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agriculteur_categorie ADD CONSTRAINT FK_FF5DD6D0BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A7EBB810E FOREIGN KEY (agriculteur_id) REFERENCES agriculteur (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES agriculteur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agriculteur_categorie DROP FOREIGN KEY FK_FF5DD6D07EBB810E');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A7EBB810E');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE agriculteur_categorie DROP FOREIGN KEY FK_FF5DD6D0BCF5E72D');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6ABCF5E72D');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE agriculteur');
        $this->addSql('DROP TABLE agriculteur_categorie');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE contact_info');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reset_password_request');
    }
}
