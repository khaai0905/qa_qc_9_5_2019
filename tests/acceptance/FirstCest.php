<?php

use Page\Acceptance\MainPage;
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class FirstCest
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
        $this->NumberOfPerson='5';
        $this->Date='9/05/2019';
        $this->Description='test';
        $this->StartTime='18';
    }

    /**
     * create new table successfully
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewSuccessfully(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create new table successfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->comment('Create Successfully');
        $I->amOnPage(MainPage::$URL);
        $I->pause();
    }

    /**
     * Verify click on reload data
     * @param FirstStep $I
     * @throws Exception
     */
    public function ReloadData(FirstStep $I)
    {
        $I->ReloadData();
        $I->pause();
    }

    /**
     * Verify delete data
     * @param FirstStep $I
     * @throws Exception
     */
    public function DeleteData(FirstStep $I)
    {
        $I->DeleteData();
        $I->pause();
    }

    /**
     * Verify click on next page
     * @param FirstStep $I
     * @throws Exception
     */
    public function NextPage(FirstStep $I)
    {
        $I->NextPage();
        $I->pause();
    }

    /**
     * Clear all data input
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function ClearInput(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to test if i clear input field');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputForClear($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->pause();
    }

}
