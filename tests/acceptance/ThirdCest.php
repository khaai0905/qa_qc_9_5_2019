<?php

use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class ThirdCest
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
        $this->startTime='22';
    }

    /**
     * Verify create new table with invalid ID
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithIDInvalid(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->tableID,$this->numberOfPerson,$this->Date,$this->Description,$this->startTime);
        $I->pause();
    }

}
