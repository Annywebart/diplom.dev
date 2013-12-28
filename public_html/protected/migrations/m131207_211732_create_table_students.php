<?php

class m131207_211732_create_table_students extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Students` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idGroup` INT NOT NULL ,
                  `firstName` VARCHAR(50) NOT NULL ,
                  `lastName` VARCHAR(50) NOT NULL ,
                  `gender` TINYINT(1) NOT NULL ,
                  `dob` DATE NOT NULL ,
                  `isFree` TINYINT(1) NOT NULL ,
                  PRIMARY KEY (`id`)
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
