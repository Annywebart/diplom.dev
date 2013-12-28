<?php

class m131228_143020_create_table_timetable extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Timetable` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idLesson` INT NOT NULL ,
                  `week` TINYINT(1) NOT NULL ,
                  `dayOfWeek` TINYINT(1) NOT NULL ,
                  `idGroup` INT NOT NULL ,
                  `idLecturers` INT NOT NULL ,
                  `title` VARCHAR(200) DEFAULT NULL ,
                  `idCorpus` INT NOT NULL ,
                  `idClassroom` INT NOT NULL ,
                  `shortTitle` VARCHAR(50) DEFAULT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Timetable`');
    }

}
