<?php

declare(strict_types=1);

namespace Girevik1\SubstrComposerPackage;

class PerfectText
{
    /**
     * Получаем текст нужной длинны, с заглавной буквы и с добавлением в конце - переданных символов.
     * 
     */
    public function getNeedFormatText(string $text, int $length, string $end, string $encoding = 'UTF-8'): string
    {
        return mb_substr($text, 0, $length, $encoding) . $end;
    }
}
