<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230407205230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, type LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', renouvellement TINYINT(1) NOT NULL, date_expire DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, plafond INT NOT NULL, INDEX IDX_351268BB79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB79F37AE5 FOREIGN KEY (id_user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE evenement CHANGE id_transport id_transport INT DEFAULT NULL, CHANGE id_cat_event id_cat_event INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture CHANGE numRes numRes INT DEFAULT NULL, CHANGE idUser idUser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE id_cat_prod id_cat_prod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idUser idUser INT DEFAULT NULL, CHANGE idEvent idEvent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB79F37AE5');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('ALTER TABLE evenement CHANGE id_cat_event id_cat_event INT NOT NULL, CHANGE id_transport id_transport INT NOT NULL');
        $this->addSql('ALTER TABLE facture CHANGE numRes numRes INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE id_cat_prod id_cat_prod INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idEvent idEvent INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT NOT NULL');
    }
}
