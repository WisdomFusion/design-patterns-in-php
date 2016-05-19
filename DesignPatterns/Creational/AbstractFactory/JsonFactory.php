<?php
namespace DesignPatterns\Creational\AbstractFactory;


class JsonFactory extends AbstractFactory
{
    public function createText($text)
    {
        return new Json\Text($text);
    }
}