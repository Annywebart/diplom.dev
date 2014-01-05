<?php

class m131228_142423_create_table_corpuses extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Corpuses` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `title` VARCHAR(200) NOT NULL ,
                  `shortTitle` VARCHAR(50) DEFAULT NULL,
                  `description` TEXT DEFAULT NULL ,
                  `levels` TINTINT(2) DEFAULT 1,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Corpuses`');
    }

}
