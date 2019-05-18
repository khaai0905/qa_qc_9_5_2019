<?php
use Step\Acceptance\SecondStep;

class SecondCest
{

    /**
     * Verify sort id
     * @param SecondStep $I
     * @throws Exception
     */
    public function IdSort(SecondStep $I)
    {
        $I->IdSort();
    }

    /**
     * Verify sort type
     * @param SecondStep $I
     * @throws Exception
     */
    public function TypeSort(SecondStep $I)
    {
        $I->TypeSort();
    }

    /**
     * Verify sort number of person
     * @param SecondStep $I
     * @throws Exception
     */
    public function NumberOfPersonSort(SecondStep $I)
    {
        $I->NumberOfPersonSort();
    }

    /**
     * Verify sort date
     * @param SecondStep $I
     * @throws Exception
     */
    public function DateSort(SecondStep $I)
    {
        $I->DateSort();
    }

    /**
     * Verify sort description
     * @param SecondStep $I
     * @throws Exception
     */
    public function DescriptionSort(SecondStep $I)
    {
        $I->DescriptionSort();
    }

    /**
     * Verify sort duration
     * @param SecondStep $I
     * @throws Exception
     */
    public function DurationSort(SecondStep $I)
    {
        $I->DurationSort();
    }

    /**
     * Verify sort start time
     * @param SecondStep $I
     * @throws Exception
     */
    public function StartTimeSort(SecondStep $I)
    {
        $I->StartTimeSort();
    }

}
