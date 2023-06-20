<?php

namespace Dope\Shop\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface UsedInterface extends ExtensibleDataInterface
{
    const ENTITY_ID = 'entity_id';
    const NAME = 'Name';
    const FATHER_NAME = 'Father_Name';
    const JOB = 'Job';
    const EDUCATION = 'Education';
    const PHONE_NUMBER = 'Phone_Number';
    const EMAIL = 'Email';
    const CITY = 'City';

    public function getId();

    /**
     * @param $entity_id
     * @return mixed
     */
    public function setId($entity_id);

    public function getName();

    /**
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    public function getFatherName();

    /**
     * @param string $father
     * @return mixed
     */
    public function setFatherName($father);

    public function getJob();

    /**
     * @param string $job
     * @return mixed
     */
    public function setJob($job);

    public function getEdu();

    /**
     * @param string $education
     * @return mixed
     */
    public function setEdu($education);

    public function getPhone();

    /**
     * @param string $phone
     * @return mixed
     */
    public function setPhone($phone);

    public function getEmail();
    /**
     * @param string $email
     * @return mixed
     */
    public function setEmail($email);

    public function getCity();

    /**
     * @param string $city
     * @return mixed
     */
    public function setCity($city);

}
