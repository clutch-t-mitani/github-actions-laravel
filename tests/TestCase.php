<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase; // ★ 追加

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase; // ★ 追加

}
