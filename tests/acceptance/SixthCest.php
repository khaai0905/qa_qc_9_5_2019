<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class SixthCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $Description;
    protected $startTime;

    public function __construct()
    {
        $this->reservation =
            [
                'numberOfPerson' => '2',
                'Date'=>'15/5/2019',
                'Description' => "testing",
                'startTime' => '5'
            ];
    }

    /**
     * Verify create new table without ID field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutIDField(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do create table unsuccessfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutID($this->reservation);
    }
}
