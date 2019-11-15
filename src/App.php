<?php

namespace TaskRunnerHelloWorld;

use TaskRunner\App as AppBase;

class App extends AppBase {

  protected static $paramsMap = [
    'hello' => 'hello',
    'bye' => 'bye',
    'repeat' => '--repeat',
    'help' => '--help',
  ];

  protected function getUsageDefinition() {
    return <<<TXT
Task Runner Hello World App

Usage:
  task-runner-hello-world (hello [--repeat] | bye) [--help] 

Commands:
  hello                  Writes Hello World
  bye                    Writes Bye World

Options:
  --repeat               Repeat the text two times. 
  --help                 Show some help.
TXT;
  }

}
