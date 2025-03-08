<?php

declare(strict_types=1);

namespace App\Domains\Engine\Drivers;

use App\Domains\Engine\BaseDriver;
use App\Domains\Engine\Enums\EngineEnum;
use App\Services\Ai\GroqService;

class GroqEngineDriver extends BaseDriver
{
    protected function getService(): GroqService
    {
        return app(GroqService::class);
    }

    public function enum(): EngineEnum
    {
        return EngineEnum::GROQ;
    }
} 