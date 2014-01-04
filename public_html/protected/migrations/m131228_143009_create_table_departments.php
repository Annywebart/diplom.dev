<?php

class m131228_143009_create_table_departments extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Departments` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idFacultet` INT NOT NULL ,
                  `title` VARCHAR(200) NOT NULL ,
                  `shortTitle` VARCHAR(50) NOT NULL ,
                  `description` TEXT DEFAULT NULL ,
                  `headDepartment` INT NOT NULL ,
                  `idCorpus` INT NOT NULL ,
                  `idClassroom` INT NOT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Departments`');
    }

}
