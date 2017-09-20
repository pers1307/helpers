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

class ItemColumnsHelper
{
    /** @var int */
    private $itemInColumns;

    /**
     * @return int
     */
    public function getItemInColumns()
    {
        return $this->itemInColumns;
    }

    /**
     * @param int $itemInColumns
     */
    public function setItemInColumns($itemInColumns)
    {
        $this->itemInColumns = $itemInColumns;
    }

    /**
     * todo: потом
     */
    public function processing($items)
    {
        $colons = [];

        $count  = 0;
        $column = 0;

        foreach ($items as $item) {
            if ($count >= $this->itemInColumns) {
                $count = 0;
                $column++;
            }

            $colons[$column][] = $item;
            $count++;
        }

        return $colons;
    }
}