<?php
namespace Clicars\Models;

use Clicars\Interfaces\IMember;

class Member implements IMember
{
    protected $id;
    protected $age;
    protected $boss;
    protected $subordinates;

    public function __construct(int $id, int $age)
    {
        $this->id = $id;
        $this->age = $age;
        $this->subordinates = [];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function addSubordinate(IMember $subordinate): IMember
    {        
        if (array_search($subordinate, $this->subordinates) === false) {
            $this->subordinates[$subordinate->getId()] = $subordinate;            
        }
        return $this;
    }

    public function removeSubordinate(IMember $subordinate): ?IMember
    {
        if (($key = array_search($subordinate, $this->subordinates)) !== false) {
            unset($this->subordinates[$key]);
            return $subordinate;
        }
        return null;
    }

    public function getSubordinates(): array
    {
        return $this->subordinates;
    }
    
    public function getBoss(): ?IMember
    {
        return $this->boss;
    }

    public function setBoss(?IMember $boss): IMember
    {
        $this->boss = $boss;
        if ($boss) $boss->addSubordinate($this);
        return $this;
    }
}
