<?php

namespace App\Interfaces\csv;

use App\Entity\Donation;
use App\Entity\Person;
use App\Entity\Project;
use App\Entity\Reward;

interface ImportResultInterface
{
    /**
     * @return iterable<Person>
     */
    public function getPersons(): iterable;

    public function countPersons(): int;

    /**
     * @return iterable<Project>
     */
    public function getProjects(): iterable;

    public function countProjects(): int;


    /**
     * @return iterable<Donation>
     */
    public function getDonations(): iterable;

    public function countDonations(): int;

    /**
     * @return iterable<Reward>
     */
    public function getRewards(): iterable;

    public function countRewards(): int;

}