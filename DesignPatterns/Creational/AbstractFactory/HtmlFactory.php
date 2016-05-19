<?php
namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText($text)
    {
        return new Html\Text($text);
    }
}