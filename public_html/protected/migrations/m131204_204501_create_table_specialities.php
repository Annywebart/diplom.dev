<?php

class m131204_204501_create_table_specialities extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Specialities` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idFacultet` INT NOT NULL ,
                  `code` VARCHAR(10) NOT NULL ,
                  `description` TEXT ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Specialities`');
    }

}
