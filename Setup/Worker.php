<?php

namespace Plugin\GridExample\Setup;

class Worker extends \Ip\SetupWorker{

    public function activate()
    {
        $table = ipTable('gridExample');
        ipDb()->execute("
CREATE TABLE IF NOT EXISTS $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gridOrder` DOUBLE NOT NULL,
  `inLove` int(1) NOT NULL,
  `age` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
        ");
    }

    public function deactivate()
    {
        $table = ipTable('gridExample');
        try {
            ipDb()->execute("
              DROP TABLE $table;
            ");
        } catch (\Exception $e) {
            //ignore
        }
    }

    public function remove()
    {

    }


}
