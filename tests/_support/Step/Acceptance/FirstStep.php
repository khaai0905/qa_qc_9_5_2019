<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
//use Page\Acceptance\SortPage;
class FirstStep extends \AcceptanceTester
{
    public function CreateNewReservation()
    {
        /**
         *  first step to create or edit table
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$NewReservation,30);
        $I->click(MainPage::$NewReservation);
    }
    public function ReloadData()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$ReloadData);
        $I->click(MainPage::$ReloadData);
    }
    public function DeleteData()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$Delete);
        $I->click(MainPage::$Delete);
    }
    public function Edit()
    {
        /**
         * first step to do edit
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$Edit,30);
        $I->click(MainPage::$Edit);
    }
    public function NextPage()
    {
        /**
         * first step to do edit
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$NextPage,30);
        $I->click(MainPage::$NextPage);
    }
}