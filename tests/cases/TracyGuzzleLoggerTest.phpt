<?php declare(strict_types=1);

namespace Tests\Surda\Logging;

use Surda\Logging\TracyGuzzleLogger;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

/**
 * @testCase
 */
class TracyGuzzleLoggerTest extends TestCase
{
    public function testLogger()
    {
        Assert::type(TracyGuzzleLogger::class, new TracyGuzzleLogger());
    }
}

(new TracyGuzzleLoggerTest())->run();