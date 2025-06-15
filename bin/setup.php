<?php

require  "config.php";


use Nemundo\Project\Install\ProjectInstall;

require  "config.php";

(new \Nemundo\Db\Provider\MySql\Database\MySqlDatabase())->createDatabase();

$reset = new \Nemundo\Project\Reset\ProjectReset();

(new ProjectInstall())->install();

(new \Nemundo\Share\Application\ShareApplication())->installApp();


$reset->remove();

