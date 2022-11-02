<?php declare(strict_types=1);

namespace Surda\Logging;

use Psr\Log\LoggerInterface;
use Stringable;
use Tracy\Debugger;

class TracyGuzzleLogger implements LoggerInterface
{
    public function emergency(Stringable|string $message, array $context = [])
    {
        $this->log('emergency', $message, $context);
    }

    public function alert(Stringable|string $message, array $context = [])
    {
        $this->log('alert', $message, $context);
    }

    public function critical(Stringable|string $message, array $context = [])
    {
        $this->log('critical', $message, $context);
    }

    public function error(Stringable|string $message, array $context = [])
    {
        $this->log('error', $message, $context);
    }

    public function warning(Stringable|string $message, array $context = [])
    {
        $this->log('warning', $message, $context);
    }

    public function notice(Stringable|string $message, array $context = [])
    {
        $this->log('notice', $message, $context);
    }

    public function info(Stringable|string $message, array $context = [])
    {
        $this->log('info', $message, $context);
    }

    public function debug(Stringable|string $message, array $context = [])
    {
        $this->log('debug', $message, $context);
    }

    /**
     * @param mixed $level
     */
    public function log($level, Stringable|string $message, array $context = [])
    {
        Debugger::log($message, (string) $level);
    }
}