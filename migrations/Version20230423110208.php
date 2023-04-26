<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423110208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('CREATE TABLE ProdLike (id INT AUTO_INCREMENT NOT NULL, produit INT DEFAULT NULL, user INT DEFAULT NULL, INDEX IDX_2120F763F347EFB (produit), INDEX IDX_2120F763A76ED395 (user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       //$this->addSql('ALTER TABLE ProdLike ADD CONSTRAINT FK_2120F763F347EFB FOREIGN KEY (produit) REFERENCES Produit (idProd)');
        //$this->addSql('ALTER TABLE ProdLike ADD CONSTRAINT FK_2120F763A76ED395 FOREIGN KEY (user) REFERENCES users (id)');
       
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       
    }
}
