<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331150047 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liste ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE liste ADD CONSTRAINT FK_FCF22AF4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FCF22AF4A76ED395 ON liste (user_id)');
        $this->addSql('ALTER TABLE task ADD liste_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25E85441D8 FOREIGN KEY (liste_id) REFERENCES liste (id)');
        $this->addSql('CREATE INDEX IDX_527EDB25E85441D8 ON task (liste_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liste DROP FOREIGN KEY FK_FCF22AF4A76ED395');
        $this->addSql('DROP INDEX IDX_FCF22AF4A76ED395 ON liste');
        $this->addSql('ALTER TABLE liste DROP user_id');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25E85441D8');
        $this->addSql('DROP INDEX IDX_527EDB25E85441D8 ON task');
        $this->addSql('ALTER TABLE task DROP liste_id');
    }
}
