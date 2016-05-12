<?php

namespace Swader\Diffbot;

class SkeletonClass
{

    /**
     * Создаём новый экземпляр шаблонного приложения
     */
    public function __construct()
    {
    }

    /**
     * Дружелюбное приветствие
     *
     * @param string $phrase Возвращаемая фраза
     *
     * @return string Возвращает переданную фразу
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}