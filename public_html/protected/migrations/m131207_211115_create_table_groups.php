<?php

class m131207_211115_create_table_groups extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Groups` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idSpeciality` INT NOT NULL ,
                  `title` VARCHAR(10) NOT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Groups`');
    }

}
