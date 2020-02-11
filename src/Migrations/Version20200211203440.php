<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211203440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE competitions_industries (competition_id INT NOT NULL, industry_id INT NOT NULL, INDEX IDX_30AB9BF47B39D312 (competition_id), INDEX IDX_30AB9BF42B19A734 (industry_id), PRIMARY KEY(competition_id, industry_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competitions_industries ADD CONSTRAINT FK_30AB9BF47B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competitions_industries ADD CONSTRAINT FK_30AB9BF42B19A734 FOREIGN KEY (industry_id) REFERENCES industry (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB12B19A734');
        $this->addSql('DROP INDEX UNIQ_B50A2CB1D1B862B8 ON competition');
        $this->addSql('DROP INDEX IDX_B50A2CB12B19A734 ON competition');
        $this->addSql('ALTER TABLE competition DROP industry_id, DROP hash');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE competitions_industries');
        $this->addSql('ALTER TABLE competition ADD industry_id INT DEFAULT NULL, ADD hash VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB12B19A734 FOREIGN KEY (industry_id) REFERENCES industry (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B50A2CB1D1B862B8 ON competition (hash)');
        $this->addSql('CREATE INDEX IDX_B50A2CB12B19A734 ON competition (industry_id)');
    }
}
