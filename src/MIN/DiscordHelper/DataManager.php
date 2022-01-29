<?php

declare(strict_types=1);

namespace MIN\DiscordHelper;

final class DataManager
{
    private array $data;

    public function __construct(private string $WebHookURL)
    {
        $this->data = [];
    }

    public function setContent(string $content): void
    {
        $this->data['content'] = $content;
    }

    public function setBotName(string $name): void
    {
        $this->data['username'] = $name;
    }

    public function setTTS(bool $bool): void
    {
        $this->data['tts'] = $bool;
    }

    public function addEmbedField(string $name, string $value, bool $inline): void
    {
        $this->data['embeds'][0]['fields'][] = [
            'name' => $name,
            'value' => $value,
            'inline' => $inline
            //TODO PLEASE PUT A TRUE OR FALSE IN INLINE
        ];
    }

    public function setEmbedTitle(string $title): void
    {
        $this->data['embeds'][0]['title'] = $title;
    }

    public function setEmbedDescription(string $description): void
    {
        $this->data['embeds'][0]['description'] = $description;
    }

    public function setEmbedUrl(string $http): void
    {
        $this->data['embeds'][0]['url'] = $http;
    }

    public function setEmbedColor(int|string $color): void
    {
        $this->data['embeds'][0]['color'] = $color;
    }

    public function setEmbedType(string $type): void
    {
        $this->data['embeds'][0]['type'] = $type;
        //TODO types is rich(default), image, video, gifv, article, link
        //TODO BUT I DONT KNOW THIS HOW THIS IS USED
    }

    public function setEmbedImage(string $image_url): void
    {
        $this->data['embeds'][0]['image']['url'] = $image_url;
    }

    public function setEmbedAuthor(string $name, string $link_url): void
    {
        $this->data['embeds'][0]['author'] = [
            'name' => $name,
            'url' => $link_url
        ];
    }

    public function setEmbedFooter(string $text, string $icon_url): void
    {
        $this->data['embeds'][0]['footer'] = [
            'text' => $text,
            'icon_url' => $icon_url
        ];
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getURL(): string
    {
        return $this->WebHookURL;
    }
}