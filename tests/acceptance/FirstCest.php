<?php

use Page\Acceptance\MainPage;
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    protected $TableID;
    //protected $noTableID;
   // protected $invalidTableId;
    protected $NumberOfPerson;
    //protected $noNum;
    protected $Date;
   // protected $noDate;
    protected $Description;
    protected $StartTime;

    //protected $noTime;
   // protected $invalidTime;
   // protected $erroMes;

    public function __construct()
    {
        $this->TableID='1';
        //$this->noTableID='';
        //$this->invalidTableId='9';
        $this->NumberOfPerson='5';
        //$this->noNum='';
        $this->Date='9/05/2019';
        //$this->noDate;
        $this->Description='test';
        $this->StartTime='18';
        //$this->noTime='';
        //$this->invalidTime='15';

    }
    public function CreateNewSuccessfully(FirstStep $I, $scenario)
    {
        /**
         * create new table with invalid ID
         */
        $I->wantToTest('I want to do create new table successfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->comment('Create Successfully');
        $I->amOnPage(MainPage::$URL);
        $I->wait(5);
    }
    public function ReloadData(FirstStep $I)
    {
        /**
         * check click reload
         */
        $I->ReloadData();
    }
    public function DeleteData(FirstStep $I)
    {
        /**
         * check click delete
         */
        $I->DeleteData();
        $I->wait(5);
    }
    public function NextPage(FirstStep $I)
    {
        /**
         * check click delete
         */
        $I->NextPage();
        $I->wait(5);
    }
    public function ClearInput(FirstStep $I, $scenario)
    {
        /**
         *  clear input after fill in all field
         */
        $I->wantToTest('I want to test if i clear input field');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputForClear($this->TableID,$this->NumberOfPerson,$this->Date,$this->Description,$this->StartTime);
        $I->wait(5);
    }

}
