<?php

declare(strict_types=1);

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class DTOCreatePerson
{
    /**
     * @Assert\Type("string")
     * @Assert\NotBlank
     */
    public $firstName;

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank
     */
    public $lastName;

    /**
     * @Assert\Type("integer")
     * @Assert\NotNull
     */
    public $donationId;
}
