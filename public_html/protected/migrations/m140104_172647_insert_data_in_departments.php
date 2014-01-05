<?php

class m140104_172647_insert_data_in_departments extends CDbMigration
{

    public function up()
    {
        $this->execute("
            INSERT INTO `Departments` (`idFacultet`, `title`, `shortTitle`, `description`, `headDepartment`, `idCorpus`, `idClassroom`) VALUES
                (5, 'Геометрическое моделирование и компьютерная графика', 'ГМКГ', NULL, 0, 1, 4),
                (5, 'Литейное производство', 'ЛП', NULL, 0, 1, 4),
                (5, 'Материаловедения', '', NULL, 0, 1, 4),
                (5, 'Обработка металлов давлением', 'ОМД', NULL, 0, 1, 4),
                (5, 'Охрана труда и окружающей среды', '', NULL, 0, 1, 4),
                (5, 'Сварки', '', NULL, 0, 1, 4);
        ");
    }

    public function down()
    {
        
    }

}
