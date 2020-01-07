<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200106045532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE leave_type (id INT AUTO_INCREMENT NOT NULL, leave_type VARCHAR(255) NOT NULL, days_per_year INT NOT NULL, carry_farward INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_leave_count (id INT AUTO_INCREMENT NOT NULL, emp_id INT NOT NULL, gl_occupied DOUBLE PRECISION NOT NULL, gl_total DOUBLE PRECISION NOT NULL, pl_occupied DOUBLE PRECISION NOT NULL, pl_total DOUBLE PRECISION NOT NULL, my_day_occupied INT NOT NULL, my_day_total INT NOT NULL, compenstary_leave_occupied DOUBLE PRECISION NOT NULL, compenstary_leave_total DOUBLE PRECISION NOT NULL, loss_of_pay DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE leave_type');
        $this->addSql('DROP TABLE employee_leave_count');
    }
}
