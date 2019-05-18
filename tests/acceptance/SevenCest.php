<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class SevenCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $startTime;

    public function __construct()
    {
        $this->reservation =
            [
                'tableID' => "1",
                'numberOfPerson' => '2',
                'Date'=>'15/5/2019',
                'startTime' => '5'
            ];
    }

    /**
     * Verify create new table without Description field
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateNewWithoutDescription(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do edit table successfully');
        $I->CreateNewReservation();
        $I=new ThirdStep($scenario);
        $I->InputWithoutDescription($this->reservation);
    }

}
