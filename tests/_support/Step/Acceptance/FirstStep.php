<?php
namespace Step\Acceptance;
use Exception;
use Page\Acceptance\MainPage;
class FirstStep extends \AcceptanceTester
{
    /**
     * @throws Exception
     */
    public function CreateNewReservation()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$newReservation,30);
        $I->click(MainPage::$newReservation);
    }

    /**
     * @throws Exception
     */
    public function ReloadData()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$reloadData);
        $I->click(MainPage::$reloadData);
    }

    /**
     * @throws Exception
     */
    public function DeleteData()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$Delete);
        $I->click(MainPage::$Delete);
    }

    /**
     * @throws Exception
     */
    public function Edit()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$Edit,30);
        $I->click(MainPage::$Edit);
    }

    /**
     * @throws Exception
     */
    public function NextPage()
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$nextPage,30);
        $I->click(MainPage::$nextPage);
    }
}