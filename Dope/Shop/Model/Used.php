<?php

namespace Dope\Shop\Model;

use Dope\Shop\Api\Data\UsedInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class Used extends AbstractExtensibleModel implements UsedInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Used::class);
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return parent::getData(self::ENTITY_ID);
    }

    public function setId($entity_id)
    {
        return parent::setData(self::ENTITY_ID, $entity_id);
    }

    public function getName()
    {
        return parent::getData(self::NAME);
    }

    public function setName($name)
    {
        return parent::setData(self::NAME, $name);
    }

    public function getFatherName()
    {
        return parent::getData(self::FATHER_NAME);
    }

    public function setFatherName($father)
    {
        return parent::setData(self::FATHER_NAME, $father);
    }

    public function getJob()
    {
        return parent::getData(self::JOB);
    }

    public function setJob($job)
    {
        return parent::setData(self::JOB, $job);
    }

    public function getEdu()
    {
        return parent::getData(self::EDUCATION);
    }

    public function setEdu($education)
    {
        return parent::setData(self::EDUCATION, $education);
    }

    public function getPhone()
    {
        return parent::getData(self::PHONE_NUMBER);
    }

    public function setPhone($phone)
    {
        return parent::setData(self::PHONE_NUMBER, $phone);
    }

    public function getEmail()
    {
        return parent::getData(self::EMAIL);
    }

    public function setEmail($email)
    {
        return parent::setData(self::EMAIL, $email);
    }

    public function getCity()
    {
        return parent::getData(self::CITY);
    }

    public function setCity($city)
    {
        return parent::setData(self::CITY, $city);
    }
}
