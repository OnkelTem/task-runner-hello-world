<?php

namespace TaskRunnerHelloWorld;

use Exception;
use TaskRunner\Task;
use TaskRunner\TaskRunnerException;
use Yaklass\StatsSqlStorage;

/**
 * @property App $app
 */
class TaskBye extends Task {

  protected static $taskId = 'bye';

  public function run() {
    echo "Bye, World!\n";
  }

}
