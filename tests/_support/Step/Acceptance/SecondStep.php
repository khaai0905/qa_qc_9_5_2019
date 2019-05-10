<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\SortPage;
class SecondStep extends \AcceptanceTester
{
    public function IdSort()
    {
        /** @var sort in id column $I */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$IdSort,30);
        $I->click(SortPage::$IdSort);

    }
    public function TypeSort()
    {
        /**
         * sort in type column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$TypeSort,30);
        $I->click(SortPage::$TypeSort);
    }

    public function NumberOfPersonSort()
    {
        /**
         * sort in number column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$NumberOfPersonSort,30);
        $I->click(SortPage::$NumberOfPersonSort);
    }
    public function DateSort()
    {
        /**
         * sort in date column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$DateSort,30);
        $I->click(SortPage::$DateSort);
    }
    public function DescriptionSort()
    {
        /**
         * sort in description column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$DescriptionSort,30);
        $I->click(SortPage::$DescriptionSort);
    }
    public function DurationSort()
    {
        /**
         * sort in duration column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$DurationSort,30);
        $I->click(SortPage::$DurationSort);
    }
    public function StartTimeSort()
    {
        /**
         * sort in start time column
         */
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$StartTimeSort,30);
        $I->click(SortPage::$StartTimeSort);
    }
}