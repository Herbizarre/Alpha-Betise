<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221005145545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP is_best, DROP is_new');
        $this->addSql('ALTER TABLE calendar ADD event_cover VARCHAR(255) NOT NULL, ADD event_place VARCHAR(255) NOT NULL, ADD audience VARCHAR(255) NOT NULL, ADD reservation TINYINT(1) NOT NULL, ADD max_people INT DEFAULT NULL, ADD price INT DEFAULT NULL, ADD free TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD is_best TINYINT(1) NOT NULL, ADD is_new TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE calendar DROP event_cover, DROP event_place, DROP audience, DROP reservation, DROP max_people, DROP price, DROP free');
    }
}
