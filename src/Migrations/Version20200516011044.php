<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200516011044 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE employe_technologie');
        $this->addSql('DROP TABLE projet_technologie');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE employe_technologie (employe_id INT NOT NULL, technologie_id INT NOT NULL, INDEX IDX_A803A8BD261A27D2 (technologie_id), INDEX IDX_A803A8BD1B65292 (employe_id), PRIMARY KEY(employe_id, technologie_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE projet_technologie (projet_id INT NOT NULL, technologie_id INT NOT NULL, INDEX IDX_76BB624A261A27D2 (technologie_id), INDEX IDX_76BB624AC18272 (projet_id), PRIMARY KEY(projet_id, technologie_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE employe_technologie ADD CONSTRAINT FK_A803A8BD1B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employe_technologie ADD CONSTRAINT FK_A803A8BD261A27D2 FOREIGN KEY (technologie_id) REFERENCES technologie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_technologie ADD CONSTRAINT FK_76BB624A261A27D2 FOREIGN KEY (technologie_id) REFERENCES technologie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_technologie ADD CONSTRAINT FK_76BB624AC18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
    }
}
