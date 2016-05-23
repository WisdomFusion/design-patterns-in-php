<?php
namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST  = 2;

    /**
     * 子类必须实现该方法
     *
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vechicle
     */
    abstract protected function createVechicle($type);

    /**
     * 创建新的车辆
     *
     * @param int $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVechicle($type);
        $obj->setColor("#f00");
        
        return $obj;
    }
}

