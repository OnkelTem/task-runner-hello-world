<?php

namespace TaskRunnerHelloWorld;

use Exception;
use TaskRunner\Task;
use TaskRunner\TaskRunnerException;
use Yaklass\StatsSqlStorage;

/**
 * @property App $app
 */
class TaskHello extends Task {

  protected static $taskId = 'hello';

  public function run() {
    $count = $this->options['repeat'] ? 2 : 1;
    echo str_repeat("Hello, World!\n", $count);
  }

}
