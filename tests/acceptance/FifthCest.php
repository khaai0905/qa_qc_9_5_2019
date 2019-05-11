<?php

use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class FifthCest
{
    protected $tableID;
    protected $Date;
    protected $Description;
    protected $startTime;

    public function __construct()
    {
        $this->tableID='10';
        $this->Date='10/9/2019';
        $this->Description='happy';
        $this->startTime='22';
    }

    /**
     * Verify create new table with not input Number Of Person field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutNumberOfPerson(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutNumberOfPerson($this->tableID,$this->Date,$this->Description,$this->startTime);
        $I->pause();
    }
}
