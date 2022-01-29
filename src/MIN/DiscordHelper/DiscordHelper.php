<?php

declare(strict_types=1);

namespace MIN\DiscordHelper;

use MIN\DiscordHelper\task\SendAsyncTask;
use pocketmine\Server;

final class DiscordHelper
{
    public static function send(DataManager $data): void
    {
        Server::getInstance()->getAsyncPool()->submitTask(new SendAsyncTask($data));
    }
}