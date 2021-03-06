<?php

/**
 * Adapter to fix some issues from jsfiddle.
 */
namespace Embed\Adapters;

use Embed\Utils;

class Jsfiddle extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $url = $this->url;
        $embed_url = $url.((substr($url, -1) === '/') ? 'embedded/' : '/embedded/');

        return Utils::iframe($embed_url);
    }
}
