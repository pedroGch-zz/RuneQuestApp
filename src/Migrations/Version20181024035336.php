<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181024035336 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE arma (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, cant_manos INT NOT NULL, material_id INT NOT NULL, danio INT NOT NULL, bs INT NOT NULL, pa INT NOT NULL, mr INT NOT NULL, fue INT NOT NULL, car INT NOT NULL, des INT NOT NULL, ef INT DEFAULT NULL, max INT DEFAULT NULL, tf INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_arma (id INT AUTO_INCREMENT NOT NULL, nombre_tipo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE arma');
        $this->addSql('DROP TABLE tipo_arma');
    }
}
