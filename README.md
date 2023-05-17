# Процессор строк
Получаем текст нужной длинны, с заглавной буквы и с добавлением в конце `...`<br>
Метод может принять 4 аргумента -> текст, длина текста, на что будет заканчиваться и не обязательный параметр `кодировка`

## Требования
- PHP 7.4
## Установка

```bash
$ composer require Girevik1/substr-composer-package
```

## Использование
```php
<?php
$processor = new StringProcessor();
echo $processor->getFormatText('my string - it`s simple example', 20, '...'); // My string - it`s sim...
```