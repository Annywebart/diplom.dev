<?php

class m140105_130810_create_table_users extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Users` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `firstName` VARCHAR(50) NOT NULL ,
                  `lastName` VARCHAR(50) NOT NULL ,
                  `email` VARCHAR(100) NOT NULL ,
                  `type` TINYINT(1) NOT NULL ,
                  `avatar` VARCHAR(100) NOT NULL ,
                  `password` VARCHAR(200) NOT NULL ,
                  `lastLogin` TIMESTAMP NULL DEFAULT NULL,
                  `dateCreate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                  PRIMARY KEY (`id`),
                  UNIQUE KEY `email` (`email`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Students`');
    }

}
