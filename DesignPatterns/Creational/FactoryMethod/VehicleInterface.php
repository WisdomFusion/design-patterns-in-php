<?php
namespace DesignPatterns\Creational\FactoryMethod;

/**
 * VehicleInterface 是车辆接口
 */
interface VehicleInterface
{
    /**
     * 设置车的颜色
     * 
     * @param string $rgb
     */
    public function setColor($rgb);
}