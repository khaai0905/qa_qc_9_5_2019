<?php

use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class FourthCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $Description;
    protected $startTime;

    public function __construct()
    {
        $this->tableID='10';
        $this->numberOfPerson='2';
        $this->Date='10/9/2019';
        $this->Description='happy';
    }

    /**
     * Verify create new table with not input Duration field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutDuration(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputNegative($this->tableID,$this->numberOfPerson,$this->Date,$this->Description);
        $I->pause();
    }
}
