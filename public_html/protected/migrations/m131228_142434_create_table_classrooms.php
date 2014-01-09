<?php

class m131228_142434_create_table_classrooms extends CDbMigration
{

    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Classrooms` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `idCorpus` INT NOT NULL ,
                  `number` VARCHAR(10) NOT NULL ,
                  `level` TINYINT(2) NOT NULL ,
                  `type` TINYINT(1) DEFAULT NULL ,
                  `seats` TINYINT(3) DEFAULT NULL ,
                  PRIMARY KEY (`id`)
                    )
                    ENGINE = InnoDB
                    DEFAULT CHARACTER SET = utf8
                    COLLATE = utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->execute('DROP TABLE `Classrooms`');
    }

}
