<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;

/**
 * @property array reservation
 */
class FirstCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $Date;
    protected $Description;
    protected $startTime;

    /**
     * FirstCest constructor.
     */
    public function __construct()
    {
        $this->reservation =
            [
                'tableID' => "1",
                'numberOfPerson' => '2',
                'Date'=>'15/5/2019',
                'Description' => "testing",
                'startTime' => '5'
            ];
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
        $I = new ThirdStep($scenario);
        $I->InputForCreate($this->reservation);
        $I->comment('Create Successfully');

    }

    /**
     * Verify click on reload data
     * @param FirstStep $I
     * @throws Exception
     */
    public function ReloadData(FirstStep $I)
    {
        $I->ReloadData();
    }

    /**
     * Verify delete data
     * @param FirstStep $I
     * @throws Exception
     */
    public function DeleteData(FirstStep $I)
    {
        $I->DeleteData();
    }

    /**
     * Verify click on next page
     * @param FirstStep $I
     * @throws Exception
     */
    public function NextPage(FirstStep $I)
    {
        $I->NextPage();
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
        $I->InputForClear($this->reservation);
    }

    /**
     * Verify edit data
     * @param FirstStep $I
     * @param $scenario
     * @throws Exception
     */
    public function EditData(FirstStep $I, $scenario)
    {
        $I->wantToTest('I want to do edit table successfully');
        $I->Edit();
        $I=new ThirdStep($scenario);
        $I->InputForCreate($this->reservation);
    }

}
