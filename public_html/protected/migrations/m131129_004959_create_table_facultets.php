<?php

class m131129_004959_create_table_facultets extends CDbMigration
{
    public function up()
    {
        $this->execute("
            CREATE  TABLE IF NOT EXISTS `Facultets` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `title` VARCHAR(200) NOT NULL ,
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
        $this->execute('DROP TABLE `Facultets`');
    }


}