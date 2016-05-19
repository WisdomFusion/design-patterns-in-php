<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    /*
     * create text
     * @param string $text
     * @return text
     */
    abstract public function createText($text);
}