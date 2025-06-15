<?php
namespace Share\Setup;
use Nemundo\Project\Setup\AbstractSetup;
use Nemundo\Project\Install\ProjectInstall;
use Nemundo\User\Script\AdminUserScript;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Project\Reset\ProjectReset;
class ShareSetup extends AbstractSetup {
public function run() {
$reset = new ProjectReset();
(new ProjectInstall())->install();
(new ScriptSetup())->addScript(new AdminUserScript());
$reset->remove();
}
}