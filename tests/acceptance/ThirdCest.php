<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class ThirdCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $Description;
    protected $startTime;

    /**
     * ThirdCest constructor.
     */
    public function __construct()
    {
        $this->reservation =
            [
                'tableID' => "11",
                'numberOfPerson' => '2',
                'Date'=>'15/5/2019',
                'Description' => "testing1",
                'startTime' => '5'
            ];
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
        $I->InputForCreate($this->reservation);
    }

}
