<?php

namespace Ader\Rest\Model;

use Ader\Rest\Api\Data\GridInterface;
use Magento\Framework\Model\AbstractModel;

class Grid extends AbstractModel implements GridInterface
{
    public function _construct()
    {
        $this->_init('Ader\Rest\Model\ResourceModel\Grid');
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function getAge()
    {
        return $this->getData(self::AGE);
    }

    public function setAge($age)
    {
        return $this->setData(self::AGE, $age);
    }

    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    public function setCity($city)
    {
        return $this->setCity(self::CITY, $city);
    }

    public function getDistrict()
    {
        return $this->getData(self::DISTRICT);
    }

    public function setDistrict($district)
    {
        return $this->getDistrict(self::DISTRICT, $district);
    }

    public function getJob()
    {
        return $this->getJob(self::JOB);
    }

    public function setJob($job)
    {
        return $this->getJob(self::JOB, $job);
    }

    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }

    public function setCountry($country)
    {
        return $this->setCountry(self::COUNTRY, $country);
    }
}
