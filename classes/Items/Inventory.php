<?php

namespace Classes\Items;

/**
 * @property Items[] $items
 */
class Inventory
{
    private $items;
    private $size;

    function __construct(int $size)
    {
        $this->size = $size;
    }
}
