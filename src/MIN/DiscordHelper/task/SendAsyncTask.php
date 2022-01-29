<?php

declare(strict_types=1);

namespace MIN\DiscordHelper\task;

use MIN\DiscordHelper\DataManager;
use pocketmine\scheduler\AsyncTask;

use function curl_exec;
use function curl_init;
use function curl_setopt;
use function json_encode;

final class SendAsyncTask extends AsyncTask
{
    public function __construct(private DataManager $data)
    {
    }

    public function onRun(): void
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->data->getURL());
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($this->data->getData()));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($curl);
    }
}
