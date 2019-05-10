<?php

use Page\Acceptance\MainPage;
use Step\Acceptance\FirstStep;
use Step\Acceptance\SecondStep;
use Step\Acceptance\ThirdStep;
class SecondCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    protected $TableID;
    protected $NumberOfPerson;
    protected $Date;
    protected $Description;
    protected $StartTime;
    public function __construct()
    {
        $this->TableID='1';
        $this->NumberOfPerson='10';
        $this->Date='10/9/2019';
        $this->Description='happy';
        $this->StartTime='22';
    }
    public function EditData(FirstStep $I, $scenario)
    {
        /**
         * do edit data
         */
        $I->wantToTest('I want to do create new table successfully');
        $I->Edit();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->amOnPage(MainPage::$URL);
        $I->wait(5);
    }
    public function IdSort(SecondStep $I)
    {
        /**
         *  I sort Id column
         */
        $I->IdSort();

    }
    public function TypeSort(SecondStep $I)
    {
        /**
         * I sort type type
         */
        $I->TypeSort();

    }
    
    public function NumberOfPersonSort(SecondStep $I)
    {
        /**
         * I sort type number of person
         */
        $I->NumberOfPersonSort();
    }
    public function DateSort(SecondStep $I)
    {
        /**
         * I sort type date
         */
        $I->DateSort();
    }
    public function DescriptionSort(SecondStep $I)
    {
        /**
         * I sort type description
         */
        $I->DescriptionSort();
    }
    public function DurationSort(SecondStep $I)
    {
        /**
         * I sort type duration
         */
        $I->DurationSort();
    }
    public function StartTimeSort(SecondStep $I)
    {
        /**
         * I sort type start time
         */
        $I->StartTimeSort();
    }

}
