# Telegram Bot Command - Remove join messages

> [!NOTE]
> **For GitHub users!** This is mirror! All development takes place [here](https://git.webmasterskaya.xyz/tbc/tbc-remove-join-messages)
> | Вся разработка ведётся [здесь](https://git.webmasterskaya.xyz/tbc/tbc-remove-join-messages)

Automatically deletes messages about users joining and leaving a Telegram channel.

Автоматически удаляет сообщения о присоединении и выходе пользователей в канале Telegram.

## Подключение к проекту

Установите пакет в зависимости

```shell
composer require webmasterskaya/tbc-remove-join-messages
```

Зарегистрируйте класс команды, при инициализации приложения.

```php
$bot_api_key  = 'your:bot_api_key';
$bot_username = 'username_bot';

$telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

$telegram->addCommandClass(\Webmasterskaya\TelegramBotCommands\Commands\SystemCommands\RemoveJoinMessagesCommand::class);

$telegram->handle();
// OR
$telegram->handleGetUpdates();
```

Команду нужно запускать вручную!!! Например, при инициализации приложения, в `UpdateFilter` 

```php
$telegram->setUpdateFilter(function (Update $update, Telegram $telegram, &$reason = 'Update denied by update_filter') {

    $telegram->executeCommand('removejoinmessages');

    return true;
});
```

