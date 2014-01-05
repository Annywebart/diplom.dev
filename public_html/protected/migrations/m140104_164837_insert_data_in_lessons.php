<?php

class m140104_164837_insert_data_in_lessons extends CDbMigration
{

    public function up()
    {
        $this->execute("
            INSERT INTO `Lessons` (`id`, `timeStart`, `timeEnd`, `title`) VALUES
                (1, '08:30:00', '10:00:00', '1-я пара'),
                (2, '10:25:00', '12:00:00', '2-я пара'),
                (3, '12:35:00', '14:00:00', '3-я пара'),
                (4, '14:30:00', '16:00:00', '4-я пара'),
                (5, '16:25:00', '18:00:00', '5-я пара'),
                (6, '18:10:00', '19:55:00', '6-я пара');
        ");
    }

    public function down()
    {
        $this->execute("
            DELETE FROM `Lessons` WHERE `id` = 1 LIMIT 1;
            DELETE FROM `Lessons` WHERE `id` = 2 LIMIT 1;
            DELETE FROM `Lessons` WHERE `id` = 3 LIMIT 1;
            DELETE FROM `Lessons` WHERE `id` = 4 LIMIT 1;
            DELETE FROM `Lessons` WHERE `id` = 5 LIMIT 1;
            DELETE FROM `Lessons` WHERE `id` = 6 LIMIT 1;
        ");
    }

}
