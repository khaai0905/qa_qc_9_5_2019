<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\SortPage;
class SecondStep extends \AcceptanceTester
{

    /**
     * @throws \Exception
     */
    public function IdSort()
    {

        $I= $this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$idSort,30);
        $I->click(SortPage::$idSort);

    }

    /**
     * @throws \Exception
     */
    public function TypeSort()
    {
        $I= $this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$typeSort,30);
        $I->click(SortPage::$typeSort);
    }

    /**
     * @throws \Exception
     */
    public function NumberOfPersonSort()
    {
        $I= $this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$numberOfPersonSort,30);
        $I->click(SortPage::$numberOfPersonSort);
    }

    /**
     * @throws \Exception
     */
    public function DateSort()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$dateSort,30);
        $I->click(SortPage::$dateSort);
    }

    /**
     * @throws \Exception
     */
    public function DescriptionSort()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$descriptionSort,30);
        $I->click(SortPage::$descriptionSort);
    }

    /**
     * @throws \Exception
     */
    public function DurationSort()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$durationSort,30);
        $I->click(SortPage::$durationSort);
    }

    /**
     * @throws \Exception
     */
    public function StartTimeSort()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(SortPage::$startTimeSort,30);
        $I->click(SortPage::$startTimeSort);
    }
}