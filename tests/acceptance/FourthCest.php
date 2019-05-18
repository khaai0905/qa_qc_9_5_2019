<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class FourthCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $Description;

    public function __construct()
    {
        $this->reservation =
            [
                'tableID' => "4",
                'numberOfPerson' => '22',
                'Date'=>'15/5/2019',
                'Description' => "testing",
            ];
    }

    /**
     * Verify create new table without Start time field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutStartTime(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutStartTime($this->reservation);

    }
}
