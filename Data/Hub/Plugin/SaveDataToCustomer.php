<?php

namespace Data\Hub\Plugin;

use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Customer\Model\ResourceModel\CustomerRepository;


class SaveDataToCustomer
{

    /**
     * @param CustomerRepository $subject
     * @param callable $proceed
     * @param CustomerInterface $customer
     * @param $passwordHash
     * @return CustomerInterface
     */
    public function aroundSave(
        CustomerRepository $subject,
        callable $proceed,
        CustomerInterface $customer,
        $passwordHash = null
    ) {
        $firstName = $customer->getFirstname();
        if (strlen($firstName) > 5) {
            $firstName = substr($firstName, 0, 5);
            $customer->setFirstname($firstName);
            return $customer;
        } else {
            return $proceed($customer, $passwordHash);
        }
    }
}
