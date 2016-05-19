<?php
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text implements MediaInterface {
    /*
     * @var $text
     */
    protected $text;

    /*
     * text construct
     * @para string $text
     */
    public function __construct($text)
    {
        $this->text = (string)$text;
    }
}