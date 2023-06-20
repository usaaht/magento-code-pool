<?php

namespace Ader\Rest\Api\Data;

interface GridInterface
{
    const ID = 'id';

    const NAME = 'name';
    const AGE = 'age';
    const PHONE = 'phone';
    const CITY = 'city';
    const DISTRICT = 'district';
    const JOB = 'job';
    const COUNTRY = 'country';

    public function getId();
    public function setId($id);

    public function getName();
    public function setName($name);

    public function getAge();
    public function setAge($age);

    public function getPhone();
    public function setPhone($phone);

    public function getCity();
    public function setCity($city);

    public function getDistrict();
    public function setDistrict($district);

    public function getJob();
    public function setJob($job);

    public function getCountry();
    public function setCountry($country);
}
