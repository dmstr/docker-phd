<?php
/**
 * @group mandatory
 */
class SettingsModuleCest
{
    public function _before(E2eTester $I)
    {
    }

    public function _after(E2eTester $I)
    {
    }

    // tests
    public function tryToTest(E2eTester $I)
    {
        $I->amOnPage('/settings');
        $I->dontSee('Settings', 'h1');

        $I->login('master', 'master1');

        $I->amOnPage('/settings');
        $I->see('Settings', 'h1');
        $I->makeScreenshot('settings');
    }
}
