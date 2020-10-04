Работа с менеджером пакетов для PHP - Composer (Изучаем работу скриптов)
=====================

Небольшой пример записи собственных скриптом в секцию scripts:

```yaml
  "scripts": {
    "create-user-table": "App\\Migrations\\CreateUserTable::up",
    "create-products-table": "App\\Migrations\\CreateProductTable::up",
    "migrate": [
      "@composer create-user-table",
      "@composer create-products-table"
    ]
  }
```

=====================
## Вопросы для занятия:
  - Для чего придумали scripts секцию в composer.json?
  - Основные возможности? 

## Видеоматериал:
   - отсутствует

## Текстовый материал (Общий):
  - https://getcomposer.ucoz.org/publ/kniga/skhema_composer_json/2-1-0-5
  - https://composer.json.jolicode.com/
  
## Текстовый материал (По скриптам):
 - https://getcomposer.ucoz.org/publ/skripty/1-1-0-15

## Домашнее занятие:
   - Посмотрите видео-материал к таску
   - Ознакомиться с тектовым материалом
   - Ответьте на вопросы 
