<?php

class m131228_142413_create_table_lessons extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Lessons` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `timeStart` TIME NOT NULL ,
                  `timeEnd` TIME NOT NULL ,
                  `title` VARCHAR(50) DEFAULT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Lessons`');
    }

}
