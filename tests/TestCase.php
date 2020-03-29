<?php

namespace Fajarwz\BangunRuang\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase {
  protected function getPackageProviders($app){
    return [\Fajarwz\BangunRuang\Providers\BangunRuangServiceProvider::class];
  }

  protected function setUp(): void {
    parent::setUp();

    // Your code here
  }
}
?>