<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\ValuePage;
class ThirdStep extends \AcceptanceTester
{
    public function InputForCreate($TableID,$NumberOfPerson,$Date,$Description,$StartTime)
    {
        $I=$this;
        $I->waitForElementVisible(ValuePage::$TableID,30);
        $I->fillField(ValuePage::$TableID,$TableID);
        $I->waitForElementVisible(ValuePage::$NumberOfPerson,30);
        $I->fillField(ValuePage::$NumberOfPerson,$NumberOfPerson);
        $I->waitForElementVisible(ValuePage::$Date,30);
        $I->fillField(ValuePage::$Date,$Date);
        $I->waitForElementVisible(ValuePage::$Description,30);
        $I->fillField(ValuePage::$Description,$Description);
        $I->waitForElementVisible(ValuePage::$StartTime,30);
        $I->fillField(ValuePage::$StartTime,$StartTime);
        $I->click(MainPage::$AddButton);
    }
    public function InputForClear($TableID,$NumberOfPerson,$Date,$Description,$StartTime)
    {
        $I=$this;
        $I->waitForElementVisible(ValuePage::$TableID,30);
        $I->clearField(ValuePage::$TableID);
        $I->fillField(ValuePage::$TableID,$TableID);
        $I->waitForElementVisible(ValuePage::$NumberOfPerson,30);
        $I->clearField(ValuePage::$NumberOfPerson);
        $I->fillField(ValuePage::$NumberOfPerson,$NumberOfPerson);
        $I->waitForElementVisible(ValuePage::$Date,30);
        $I->clearField(ValuePage::$Date);
        $I->fillField(ValuePage::$Date,$Date);
        $I->waitForElementVisible(ValuePage::$Description,30);
        $I->clearField(ValuePage::$Description);;
        $I->fillField(ValuePage::$Description,$Description);
        $I->waitForElementVisible(ValuePage::$StartTime,30);
        $I->clearField(ValuePage::$StartTime);
        $I->fillField(ValuePage::$StartTime,$StartTime);
        $I->click(MainPage::$ClearButton);
    }
}