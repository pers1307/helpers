<?php
/**
 * ColumnsHelper.php
 * Класс помогает распределить элементы по колонкам
 *
 * @author      Pereskokov Yurii
 * @version     1.0
 * @copyright   2017 Pereskokov Yurii
 * @license     Mediasite LLC
 * @link        http://www.mediasite.ru/
 */

namespace pers1307\helpers;

class ColumnsHelper
{
    /** @var int */
    private $columns;

    /**
     * Установка необходимого количества колонок, на которое потом пройдет распределение
     *
     * @param int $columns
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    /**
     * Распределение элементов по колонкам в горизонтальном порядке
     * Элемент массива является колонкой
     *
     * @param array $items
     *
     * @return array
     */
    public function horizontal($items)
    {
        $count = count($items);

        $colons = [];

        for ($i = 0; $i < $this->columns; $i++) {
            $colons[$i] = [];
        }

        $countForColons = 0;

        for ($i = 0; $i < $count; $i++) {

            array_push($colons[$countForColons], $items[$i]);

            ++$countForColons;
            if ($countForColons > $this->columns -1 ) {
                $countForColons = 0;
            }
        }

        return $colons;
    }

    /**
     * Распределение элементов по колонкам в горизонтальном порядке
     * Элемент массива является строкой
     *
     * @param array $items
     *
     * @return array
     */
    public function horizontalForTable($items)
    {
        $count = count($items);

        $lines = [];

        $countLines = ceil($count / $this->columns);

        for ($cursor = 0; $cursor < $countLines; $cursor++) {
            $lines[$cursor] = [];
        }

        $indexItems = 0;

        foreach ($lines as $key => &$line) {

            for ($cursor = 0; $cursor < $this->columns; $cursor++) {

                if ($indexItems < $count) {

                    $line[$cursor] = $items[$indexItems];

                    ++$indexItems;
                }
            }
        }

        return $lines;
    }

    /**
     * Распределение элементов по колонкам в вертикальном порядке (пока не реализовано)
     *
     * @param array $items
     *
     * @return array
     */
    public function upright($items)
    {
        $result = [];

        $index = 0;

        foreach ($items as $item) {

            $result[$index][] = $item;

            ++$index;

            if ($index > $this->columns - 1) {

                $index = 0;
            }
        }

        return $result;
    }
}