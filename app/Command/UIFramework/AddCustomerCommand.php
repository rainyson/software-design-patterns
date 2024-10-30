<?php

namespace App\Command\UIFramework;

use App\Command\UIFramework\ICommand;

class AddCustomerCommand implements ICommand
{
    private CustomerService $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function execute(): string
    {
        return $this->customerService->addCustomer();
    }
}