<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422095127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit ADD nb_likes INT DEFAULT NULL, ADD nb_dislikes INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD num_res INT AUTO_INCREMENT NOT NULL, DROP numRes, CHANGE idUser idUser INT DEFAULT NULL, CHANGE idEvent idEvent INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (num_res)');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP nb_likes, DROP nb_dislikes');
        $this->addSql('ALTER TABLE reservation MODIFY num_res INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON reservation');
        $this->addSql('ALTER TABLE reservation ADD numRes INT NOT NULL, DROP num_res, CHANGE idEvent idEvent INT NOT NULL, CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (numRes)');
        $this->addSql('ALTER TABLE reservation2 CHANGE idEvent idEvent INT NOT NULL');
    }
}
