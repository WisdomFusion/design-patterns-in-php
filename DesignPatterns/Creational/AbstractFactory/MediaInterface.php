<?php
namespace DesignPatterns\Creational\AbstractFactory;


interface MediaInterface
{
    /*
     * HTML 或 JSON 输出渲染
     * @return string
     */
    public function render();
}