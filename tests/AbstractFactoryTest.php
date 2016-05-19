<?php
namespace Tests;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            'jsonfactory' => new JsonFactory(),
            'htmlfactory' => new HtmlFactory()
        );
    }

    public function textCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Just a test!')
        );

        return $article;
    }

    public function test()
    {
        echo '<h2>Abstract Factory</h2>' . PHP_EOL;

        $factories = $this->getFactories();
        var_dump($this->textCreation($factories['jsonfactory']));
        var_dump($this->textCreation($factories['htmlfactory']));
    }
}