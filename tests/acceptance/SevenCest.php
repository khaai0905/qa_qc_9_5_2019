<?php
use Page\Acceptance\MainPage;
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

class SevenCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $startTime;

    public function __construct()
    {
        $this->tableID='1';
        $this->numberOfPerson='2';
        $this->Date='10/9/2019';
        $this->startTime='12';
    }

    /**
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutDescription(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do edit table successfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutDescription($this->tableID,$this->numberOfPerson,$this->Date,$this->startTime);
        $I->amOnPage(MainPage::$URL);
        $I->pause();
    }

}
