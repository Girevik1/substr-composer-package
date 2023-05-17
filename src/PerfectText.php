<?php

declare(strict_types=1);

namespace Girevik1\SubstrComposerPackage;

class PerfectText
{
    public function getNeedFormatText(string $text, int $length, string $end, string $encoding = 'UTF-8'): string
    {
        return mb_substr($text, 0, $length, $encoding) . $end;
    }
}
