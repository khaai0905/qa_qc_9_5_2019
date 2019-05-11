<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\ValuePage;
class ThirdStep extends \AcceptanceTester
{
    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $Date
     * @param $Description
     * @param $startTime
     * @throws \Exception
     */
    public function InputForCreate($tableID,$numberOfPerson,$Date,$Description,$startTime)
    {
        $I=$this;
        $I->waitForElementVisible(ValuePage::$tableID,30);
        $I->fillField(ValuePage::$tableID,$tableID);
        $I->waitForElementVisible(ValuePage::$numberOfPerson,30);
        $I->fillField(ValuePage::$numberOfPerson,$numberOfPerson);
        $I->waitForElementVisible(ValuePage::$Date,30);
        $I->fillField(ValuePage::$Date,$Date);
        $I->waitForElementVisible(ValuePage::$Description,30);
        $I->fillField(ValuePage::$Description,$Description);
        $I->waitForElementVisible(ValuePage::$startTime,30);
        $I->fillField(ValuePage::$startTime,$startTime);
        $I->click(MainPage::$addButton);
    }

    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $Date
     * @param $Description
     * @throws \Exception
     */
    public function InputNegative($tableID,$numberOfPerson,$Date,$Description)
    {
        $I=$this;
        $I->waitForElementVisible(ValuePage::$tableID,30);
        $I->fillField(ValuePage::$tableID,$tableID);
        $I->waitForElementVisible(ValuePage::$numberOfPerson,30);
        $I->fillField(ValuePage::$numberOfPerson,$numberOfPerson);
        $I->waitForElementVisible(ValuePage::$Date,30);
        $I->fillField(ValuePage::$Date,$Date);
        $I->waitForElementVisible(ValuePage::$Description,30);
        $I->fillField(ValuePage::$Description,$Description);
        $I->click(MainPage::$addButton);
    }
    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $Date
     * @param $Description
     * @param $startTime
     * @throws \Exception
     */
    public function InputForClear($tableID, $numberOfPerson, $Date, $Description, $startTime)
    {
        $I=$this;
        $I->waitForElementVisible(ValuePage::$tableID,30);
        $I->clearField(ValuePage::$tableID);
        $I->fillField(ValuePage::$tableID,$tableID);
        $I->waitForElementVisible(ValuePage::$numberOfPerson,30);
        $I->clearField(ValuePage::$numberOfPerson);
        $I->fillField(ValuePage::$numberOfPerson,$numberOfPerson);
        $I->waitForElementVisible(ValuePage::$Date,30);
        $I->clearField(ValuePage::$Date);
        $I->fillField(ValuePage::$Date,$Date);
        $I->waitForElementVisible(ValuePage::$Description,30);
        $I->clearField(ValuePage::$Description);;
        $I->fillField(ValuePage::$Description,$Description);
        $I->waitForElementVisible(ValuePage::$startTime,30);
        $I->clearField(ValuePage::$startTime);
        $I->fillField(ValuePage::$startTime,$startTime);
        $I->click(MainPage::$clearButton);
    }
}