<?php

namespace ZnDomain\DataProvider\Interfaces;

use ZnCore\Collection\Interfaces\Enumerable;

/**
 * Провайдер данных
 *
 * Используется при выборке коллекции сущностей и параметров пагинации
 */
interface DataProviderInterface
{

    /**
     * Получить коллекцию сущностей
     * @return Enumerable
     */
    public function getCollection(): Enumerable;

    /**
     * Получить общее колличество записей в хранилище
     * @return int
     */
    public function getTotalCount(): int;
}