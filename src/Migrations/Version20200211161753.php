<?php

declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211161753 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE support_site (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, abbreviation VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, competitions_page_url VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B1559FB75E237E06 (name), UNIQUE INDEX UNIQ_B1559FB7BCF3411D (abbreviation), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_sites_industry (id INT AUTO_INCREMENT NOT NULL, industry_id INT DEFAULT NULL, support_site_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_1905CF9A2B19A734 (industry_id), INDEX IDX_1905CF9A4B881EBA (support_site_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE support_sites_industry ADD CONSTRAINT FK_1905CF9A2B19A734 FOREIGN KEY (industry_id) REFERENCES industry (id)');
        $this->addSql('ALTER TABLE support_sites_industry ADD CONSTRAINT FK_1905CF9A4B881EBA FOREIGN KEY (support_site_id) REFERENCES support_site (id)');
        $this->addSql("INSERT INTO `support_site` (`id`, `name`, `abbreviation`, `url`, `competitions_page_url`) VALUES
                                (1,	'Российский Фонд Фундаментальных Исследований',	'RFBR',	'https://www.rfbr.ru',	'https://www.rfbr.ru/rffi/ru/contest_search?CONTEST_STATUS_ID=1&CONTEST_TYPE=-1&CONTEST_YEAR=-1');"
        );
        $this->addSql("INSERT INTO `support_sites_industry` (`id`, `industry_id`, `support_site_id`, `name`) VALUES
                                (1,	1,	1,	'Математика, механика, информатика'),
                                (2,	2,	1,	'Физика и астрономия'),
                                (3,	3,	1,	'Химия и науки о материалах'),
                                (4,	4,	1,	'Биология и медицинские науки'),
                                (5,	5,	1,	'Науки о Земле'),
                                (6,	6,	1,	'Естественнонаучные методы исследований в гуманитарных науках'),
                                (7,	7,	1,	'Фундаментальные основы инженерных наук');"
        );
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE support_sites_industry DROP FOREIGN KEY FK_1905CF9A4B881EBA');
        $this->addSql('DROP TABLE support_site');
        $this->addSql('DROP TABLE support_sites_industry');
    }
}
