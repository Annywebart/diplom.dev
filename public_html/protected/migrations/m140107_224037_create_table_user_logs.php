<?php

class m140107_224037_create_table_user_logs extends CDbMigration
{

    public function up()
    {
        $this->execute("
                CREATE  TABLE IF NOT EXISTS `UserLogs` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `userId` INT DEFAULT NULL,
                  `sessionId` VARCHAR(100) NOT NULL ,
                  `userIp` VARCHAR(25) NOT NULL ,
                  `browser` VARCHAR(100) NOT NULL ,
                  `operatingSystem` VARCHAR(25) NOT NULL ,
                  `userName` VARCHAR(100) NOT NULL ,
                  `entryTime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                  `spentTime` TIME NULL ,
                  `refererUrl` VARCHAR(200) NOT NULL ,
                  `pageUrl` VARCHAR(200) NOT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
                "
        );
    }

    public function down()
    {
        $this->execute('DROP TABLE `UserLog`');
    }

}
