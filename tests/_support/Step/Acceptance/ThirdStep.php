<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\ValuePage;
class ThirdStep extends \AcceptanceTester
{
    /**
     * @param array $reservation
     */
    public function InputForCreate($reservation = array())
        {
            $I=$this;

            $I -> fillField(ValuePage::$tableID, $reservation['tableID']);
            $I -> fillField(ValuePage::$numberOfPerson, $reservation['numberOfPerson']);
            $I -> fillField(ValuePage::$Date, $reservation['Date']);
            $I -> fillField(ValuePage::$Description, $reservation['Description']);
            $I -> fillField(ValuePage::$startTime, $reservation['startTime']);
            $I->click(MainPage::$addButton);
            $I->amOnPage(MainPage::$URL);
        }

    /**
     * @param array $reservation
     */
    public function InputWithoutStartTime($reservation = array())
    {
        $I=$this;
        $I -> fillField(ValuePage::$tableID, $reservation['tableID']);
        $I -> fillField(ValuePage::$numberOfPerson, $reservation['numberOfPerson']);
        $I -> fillField(ValuePage::$Date, $reservation['Date']);
        $I -> fillField(ValuePage::$Description, $reservation['Description']);
        $I->click(MainPage::$addButton);
    }

    /**
     * @param array $reservation
     */
    public function InputWithoutNumberOfPerson($reservation = array())
    {
        $I=$this;

        $I -> fillField(ValuePage::$tableID, $reservation['tableID']);
        $I -> fillField(ValuePage::$Date, $reservation['Date']);
        $I -> fillField(ValuePage::$Description, $reservation['Description']);
        $I -> fillField(ValuePage::$startTime, $reservation['startTime']);
        $I->click(MainPage::$addButton);
    }

    /**
     * @param array $reservation
     */
    public function InputWithoutID($reservation = array())
    {
        $I=$this;

        $I -> fillField(ValuePage::$numberOfPerson, $reservation['numberOfPerson']);
        $I -> fillField(ValuePage::$Date, $reservation['Date']);
        $I -> fillField(ValuePage::$Description, $reservation['Description']);
        $I -> fillField(ValuePage::$startTime, $reservation['startTime']);
        $I->click(MainPage::$addButton);
    }

    /**
     * @param array $reservation
     */
    public function InputWithoutDescription($reservation = array())
    {
        $I=$this;

        $I -> fillField(ValuePage::$tableID, $reservation['tableID']);
        $I -> fillField(ValuePage::$numberOfPerson, $reservation['numberOfPerson']);
        $I -> fillField(ValuePage::$Date, $reservation['Date']);
        $I -> fillField(ValuePage::$startTime, $reservation['startTime']);
        $I->click(MainPage::$addButton);
        $I->amOnPage(MainPage::$URL);
    }

    /**
     * @param array $reservation
     */
    public function InputForClear($reservation = array())
    {
        $I=$this;

        $I -> fillField(ValuePage::$tableID, $reservation['tableID']);
        $I -> fillField(ValuePage::$numberOfPerson, $reservation['numberOfPerson']);
        $I -> fillField(ValuePage::$Date, $reservation['Date']);
        $I -> fillField(ValuePage::$Description, $reservation['Description']);
        $I -> fillField(ValuePage::$startTime, $reservation['startTime']);
        $I->click(MainPage::$clearButton);
    }
}