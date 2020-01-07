<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200107094122 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE leave_applied (id INT AUTO_INCREMENT NOT NULL, leave_type_id INT NOT NULL, start_session_id_id INT NOT NULL, end_session_id INT NOT NULL, manager_id_id INT NOT NULL, status_id_id INT NOT NULL, emp_id INT NOT NULL, reason_message VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, days DOUBLE PRECISION NOT NULL, cut_gl DOUBLE PRECISION NOT NULL, cut_pl DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_60A18F718313F474 (leave_type_id), INDEX IDX_60A18F713927072E (start_session_id_id), INDEX IDX_60A18F716F77B451 (end_session_id), INDEX IDX_60A18F71569B5E6D (manager_id_id), INDEX IDX_60A18F71881ECFA7 (status_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE leave_applied ADD CONSTRAINT FK_60A18F718313F474 FOREIGN KEY (leave_type_id) REFERENCES leave_type (id)');
        $this->addSql('ALTER TABLE leave_applied ADD CONSTRAINT FK_60A18F713927072E FOREIGN KEY (start_session_id_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE leave_applied ADD CONSTRAINT FK_60A18F716F77B451 FOREIGN KEY (end_session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE leave_applied ADD CONSTRAINT FK_60A18F71569B5E6D FOREIGN KEY (manager_id_id) REFERENCES employee_skill (id)');
        $this->addSql('ALTER TABLE leave_applied ADD CONSTRAINT FK_60A18F71881ECFA7 FOREIGN KEY (status_id_id) REFERENCES leave_status (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE leave_applied');
    }
}
