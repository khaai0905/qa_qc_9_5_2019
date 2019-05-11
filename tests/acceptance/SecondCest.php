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

    /**
     * Verify edit data
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function EditData(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create new table successfully');
        $I->Edit();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->amOnPage(MainPage::$URL);
        $I->pause();
    }

    /**
     * Verify sort id
     * @param SecondStep $I
     * @throws Exception
     */
    public function IdSort(SecondStep $I)
    {
        $I->IdSort();
    }

    /**
     * Verify sort type
     * @param SecondStep $I
     * @throws Exception
     */
    public function TypeSort(SecondStep $I)
    {
        $I->TypeSort();
    }

    /**
     * Verify sort number of person
     * @param SecondStep $I
     * @throws Exception
     */
    public function NumberOfPersonSort(SecondStep $I)
    {
        $I->NumberOfPersonSort();
    }

    /**
     * Verify sort date
     * @param SecondStep $I
     * @throws Exception
     */
    public function DateSort(SecondStep $I)
    {
        $I->DateSort();
    }

    /**
     * Verify sort description
     * @param SecondStep $I
     * @throws Exception
     */
    public function DescriptionSort(SecondStep $I)
    {
        $I->DescriptionSort();
    }

    /**
     * Verify sort duration
     * @param SecondStep $I
     * @throws Exception
     */
    public function DurationSort(SecondStep $I)
    {
        $I->DurationSort();
    }

    /**
     * Verify sort start time
     * @param SecondStep $I
     * @throws Exception
     */
    public function StartTimeSort(SecondStep $I)
    {
        $I->StartTimeSort();
    }

}
