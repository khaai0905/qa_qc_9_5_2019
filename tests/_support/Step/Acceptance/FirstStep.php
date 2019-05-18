<?php
namespace Step\Acceptance;
use Exception;
use Page\Acceptance\MainPage;
use Page\Acceptance\ValuePage;

class FirstStep extends \AcceptanceTester
{
    /**
     * @param array $reservation
     * @throws Exception
     */
    public function CreateNewReservation($reservation = array())
    {
        $I=$this;
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$newReservation,30);
        if (isset($reservation['Description'])) //dù có hay ko có gt vẫn chạy
        {
            $I->fillField(ValuePage::$Description, $reservation['Description']);
        }
        if (isset($reservation['startTime'])) //dù có hay ko có gt vẫn chạy
        {
           $I->fillField(ValuePage::$Description, $reservation['startTime']);
        }
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
        $I->waitForElementVisible(MainPage::$goToPage,30);
        $I->click(MainPage::$goToPage);
    }
}