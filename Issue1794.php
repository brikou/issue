<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
use Doctrine\DBAL\Schema\Schema;

class Issue1794 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $i = 0;
        $this->addSql('UPDATE account_user SET preference_id = CURRVAL(\'account_user_preference_id_seq\') WHERE uuid = (SELECT uuid FROM account_user WHERE preference_id IS NULL LIMIT 1 OFFSET '.$i.')');
    }

    public function down(Schema $schema)
    {
        $this->addSql('UPDATE account_user SET preference_id = null');
    }
}
