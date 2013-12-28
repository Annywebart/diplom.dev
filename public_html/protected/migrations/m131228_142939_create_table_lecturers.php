<?php

class m131228_142939_create_table_lecturers extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Lecturers` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idDepartment` INT NOT NULL ,
                  `firstName` VARCHAR(100) NOT NULL ,
                  `lastName` VARCHAR(100) NOT NULL ,
                  `fatherName` VARCHAR(100) NOT NULL ,
                  `gender` TINYINT(1) NOT NULL ,
                  `scientificDegree` VARCHAR(200) DEFAULT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Lecturers`');
    }

}
