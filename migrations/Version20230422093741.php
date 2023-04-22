<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422093741 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement CHANGE id_transport id_transport INT DEFAULT NULL, CHANGE id_cat_event id_cat_event INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture CHANGE numRes numRes INT DEFAULT NULL, CHANGE idUser idUser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD nb_likes INT DEFAULT NULL, ADD nb_dislikes INT DEFAULT NULL, CHANGE id_cat_prod id_cat_prod INT DEFAULT NULL, CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE reservation MODIFY numRes INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE idUser idUser INT DEFAULT NULL, CHANGE idEvent idEvent INT DEFAULT NULL, CHANGE numRes num_res INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (num_res)');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement CHANGE id_cat_event id_cat_event INT NOT NULL, CHANGE id_transport id_transport INT NOT NULL');
        $this->addSql('ALTER TABLE facture CHANGE numRes numRes INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP nb_likes, DROP nb_dislikes, CHANGE id_cat_prod id_cat_prod INT NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation MODIFY num_res INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE idEvent idEvent INT NOT NULL, CHANGE idUser idUser INT NOT NULL, CHANGE num_res numRes INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (numRes)');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT NOT NULL');
    }
}
