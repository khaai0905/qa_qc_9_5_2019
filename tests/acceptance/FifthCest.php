<?php
use Page\Acceptance\MainPage;
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class FifthCest
{
    protected $tableID;
    protected $Date;
    protected $Description;
    protected $startTime;

    public function __construct()
    {
        $this->reservation =
            [
                'tableID' => "4",
                'Date'=>'15/5/2019',
                'Description' => "testing",
                'startTime' => '5'
            ];
    }

    /**
     * Verify create new table without Number Of Person field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutNumberOfPerson(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutNumberOfPerson($this->reservation);
    }
}
