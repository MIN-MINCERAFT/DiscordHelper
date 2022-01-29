<h1>DiscordHelper</h1>

<a href="https://www.php.net">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=PHP&logoColor=white">
</a>

<a href="https://github.com/pmmp/Pocketmine-MP">
    <img src="https://img.shields.io/badge/PMMP-gray?style=flat">
</a>

<a href="https://github.com/poggit/devirion">
    <img src="https://img.shields.io/badge/Virion-gray?style=flat">
</a>

<details>
<summary>How to send discorrd message</summary>
<div markdown="1">

```php
use MIN\DiscordHelper\DataManager;
use MIN\DiscordHelper\DiscordHelper;

$data = new DataManager(YourWebHookURL);
$data->setContent('THIS IS CONTENT');
DiscordHelper::send($data);
```
</div>
</details>

<details>
<summary>How to send discord embed</summary>
<div markdown="2">

```php
use MIN\DiscordHelper\DataManager;
use MIN\DiscordHelper\DiscordHelper;
use MIN\DiscordHelper\EmbedColor;

$data = new DataManager(YourWebHookURL);
$data->setEmbedTitle('THIS IS EMBED TITLE');
$data->setEmbedDescription('THIS IS EMBED DESCRIPTION');
$data->setEmbedColor(setColor); //EmbedColor::RED
DiscordHelper::send($data);
```
</div>
</details>

<details>
<summary>Embed color list</summary>
<div markdown="1">

```php
use MIN\DiscordHelper\EmbedColor;

EmbedColor::DEFAULT;
EmbedColor::WHITE;
EmbedColor::AQUA;
EmbedColor::GREEN;
EmbedColor::BLUE;
EmbedColor::YELLOW;
EmbedColor::PURPLE;
EmbedColor::LUMINOUS_VIVID_PINK;
EmbedColor::FUCHSIA;
EmbedColor::GOLD;
EmbedColor::ORANGE;
EmbedColor::RED;
EmbedColor::GREY;
EmbedColor::NAVY;
EmbedColor::DARK_AQUA;
EmbedColor::DARK_GREEN;
EmbedColor::DARK_BLUE;
EmbedColor::DARK_PURPLE;
EmbedColor::DARK_VIVID_PINK;
EmbedColor::DARK_GOLD;
EmbedColor::DARK_ORANGE;
EmbedColor::DARK_RED;
EmbedColor::DARK_GREY;
EmbedColor::DARKER_GREY;
EmbedColor::LIGHT_GREY;
EmbedColor::DARK_NAVY;
EmbedColor::BLURPLE;
EmbedColor::GREYPLE;
EmbedColor::DARK_BUT_NOT_BLACK;
EmbedColor::NOT_QUITE_BLACK;
```
</div>
</details>

<details>
<summary>Other funtions</summary>
<div markdown="1">

```php
$data->setBotName('HOOK BOT NAME CHANGE TEST');
$data->setTTS(true or false);
$data->setEmbedAuthor('THIS IS AUTHOR', 'https://github.com/MIN0707');
$data->addEmbedField('FIELD', 'THIS IS INLINE FIELD', true);
$data->addEmbedField('FIELD', 'THIS IS OUTLINE FIELD', false);
$data->setEmbedImage(SET YOUR IMAGE URL);
$data->setEmbedFooter('THIS IS FOOTER', SET YOUR IMAGE URL);
```

</div>
</details>

<details>
<summary>Example</summary>
<div markdown="1">

```php
<?php

declare(strict_types=1);

/**
 * @name Discord
 * @api 4.0.0
 * @version 0.1
 * @author MIN
 * @main Min\Discord
 */

namespace Min;

use MIN\DiscordHelper\DataManager;
use MIN\DiscordHelper\DiscordHelper;
use MIN\DiscordHelper\EmbedColor;
use pocketmine\plugin\PluginBase;

class Discord extends PluginBase
{
    private const WebHookURL = 'SET YOUR WEB HOOK URL';

    protected function onEnable(): void
    {
        $data = new DataManager(self::WebHookURL);
        $data->setBotName('BOT NAME CHANGE TEST');
        $data->setContent('THIS IS CONTENT');
        $data->setEmbedAuthor('THIS IS AUTHOR', 'https://github.com/MIN0707');
        $data->setEmbedTitle('THIS IS EMBED TITLE');
        $data->setEmbedDescription('THIS IS EMBED DESCRIPTION');
        $data->setEmbedColor(EmbedColor::RED);
        $data->addEmbedField('FIELD 1', 'THIS IS INLINE FIELD 1', true);
        $data->addEmbedField('FIELD 2', 'THIS IS INLINE FIELD 2', true);
        $data->addEmbedField('FIELD 3', 'THIS IS INLINE FIELD 3', true);
        $data->addEmbedField('FIELD 4', 'THIS IS INLINE FIELD 4', true);
        $data->addEmbedField('FIELD 5', 'THIS IS INLINE FIELD 5', true);
        $data->addEmbedField('FIELD 6', 'THIS IS INLINE FIELD 6', true);
        $data->addEmbedField('FIELD 1', 'THIS IS OUTLINE FIELD 1', false);
        $data->addEmbedField('FIELD 2', 'THIS IS OUTLINE FIELD 2', false);
        $data->addEmbedField('FIELD 3', 'THIS IS OUTLINE FIELD 3', false);
        $data->setEmbedImage(SET YOUR IMAGE URL);
        $data->setEmbedFooter('THIS IS FOOTER', SET YOUR IMAGE URL);
        DiscordHelper::send($data);
    }
}
```

</div>
</details>
