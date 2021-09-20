<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210920075607 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, car_id INT DEFAULT NULL, user_booking_id INT DEFAULT NULL, date_booking DATETIME NOT NULL, start_booking DATETIME NOT NULL, end_booking DATETIME NOT NULL, INDEX IDX_E00CEDDEC3C6F69F (car_id), INDEX IDX_E00CEDDEA457DA8C (user_booking_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car (id INT AUTO_INCREMENT NOT NULL, option_price_id INT DEFAULT NULL, mark VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, INDEX IDX_773DE69DF663B643 (option_price_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, option_price_id INT NOT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_5A8600B0F663B643 (option_price_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE option_car (id INT AUTO_INCREMENT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, driver_license VARCHAR(255) NOT NULL, num_driver_license VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, role JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEC3C6F69F FOREIGN KEY (car_id) REFERENCES car (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA457DA8C FOREIGN KEY (user_booking_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69DF663B643 FOREIGN KEY (option_price_id) REFERENCES option_car (id)');
        $this->addSql('ALTER TABLE `option` ADD CONSTRAINT FK_5A8600B0F663B643 FOREIGN KEY (option_price_id) REFERENCES option_car (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEC3C6F69F');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69DF663B643');
        $this->addSql('ALTER TABLE `option` DROP FOREIGN KEY FK_5A8600B0F663B643');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA457DA8C');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE car');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE option_car');
        $this->addSql('DROP TABLE `user`');
    }
}
