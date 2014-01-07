<?php

class m140107_182945_create_table_pages extends CDbMigration
{

    public function up()
    {
        $this->execute('CREATE TABLE IF NOT EXISTS `Pages` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `parentId` int(11) NOT NULL,
              `alias` varchar(100) NOT NULL,
              `menu_name` varchar(50) NOT NULL,
              `page_title` varchar(100) NOT NULL,
              `meta_title` varchar(255) NOT NULL,
              `meta_desc` varchar(255) NOT NULL,
              `meta_key` varchar(255) NOT NULL,
              `content` text NOT NULL,
              `date_create` datetime NOT NULL,
              `date_update` datetime NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
        ');
    }

    public function down()
    {
        $this->execute('DROP TABLE `Pages`');
    }

}
