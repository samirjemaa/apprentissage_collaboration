<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210102144858 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Activites (id INT AUTO_INCREMENT NOT NULL, id_activite VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, descripbtion LONGTEXT NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apprenant (id INT AUTO_INCREMENT NOT NULL, id_apprenant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cour (id INT NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupes (id INT AUTO_INCREMENT NOT NULL, code_groupe VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modules (id INT AUTO_INCREMENT NOT NULL, groupes_id INT DEFAULT NULL, code_module VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_2EB743D7305371B (groupes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau_scolaire (id INT AUTO_INCREMENT NOT NULL, id_niveau_scolaire VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, id_section VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, id_specialite VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE td (id INT NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tp (id INT NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur (id INT AUTO_INCREMENT NOT NULL, id_tuteur VARCHAR(255) NOT NULL, biography LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, cin VARCHAR(8) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel VARCHAR(8) NOT NULL, datenaissance DATE NOT NULL, genre TINYINT(1) NOT NULL, etatcompte TINYINT(1) NOT NULL, avatar VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cour ADD CONSTRAINT FK_A71F964FBF396750 FOREIGN KEY (id) REFERENCES Activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modules ADD CONSTRAINT FK_2EB743D7305371B FOREIGN KEY (groupes_id) REFERENCES groupes (id)');
        $this->addSql('ALTER TABLE td ADD CONSTRAINT FK_40550B4CBF396750 FOREIGN KEY (id) REFERENCES Activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tp ADD CONSTRAINT FK_5A8FDF31BF396750 FOREIGN KEY (id) REFERENCES Activites (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cour DROP FOREIGN KEY FK_A71F964FBF396750');
        $this->addSql('ALTER TABLE td DROP FOREIGN KEY FK_40550B4CBF396750');
        $this->addSql('ALTER TABLE tp DROP FOREIGN KEY FK_5A8FDF31BF396750');
        $this->addSql('ALTER TABLE modules DROP FOREIGN KEY FK_2EB743D7305371B');
        $this->addSql('DROP TABLE Activites');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE cour');
        $this->addSql('DROP TABLE groupes');
        $this->addSql('DROP TABLE modules');
        $this->addSql('DROP TABLE niveau_scolaire');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE td');
        $this->addSql('DROP TABLE tp');
        $this->addSql('DROP TABLE tuteur');
        $this->addSql('DROP TABLE user');
    }
}
