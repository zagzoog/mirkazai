<?php

declare(strict_types=1);

namespace App\Domains\Engine\Drivers;

use App\Domains\Engine\BaseDriver;
use App\Domains\Engine\Enums\EngineEnum;

class OpenAIEngineDriver extends BaseDriver
{
    public function enum(): EngineEnum
    {
        return EngineEnum::OPEN_AI;
    }
}
