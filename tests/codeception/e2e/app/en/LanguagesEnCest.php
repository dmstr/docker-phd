<?php
/**
 * @group mandatory
 * @group base-test-setup
 */
class LanguagesEnCest
{
    public function _before(E2eTester $I)
    {
    }

    public function _after(E2eTester $I)
    {
    }

    // tests
    public function testLanguageUrls(E2eTester $I)
    {
        $I->wantTo('ensure that language urls and redirects work');

        $I->amOnPage('/site/index');
        $I->seeCurrentUrlEquals('/en/user/login');

        $I->amOnPage('/xx');
        $I->seeElement('.site-error');

        $I->amOnPage('/de');
        $I->seeCurrentUrlEquals('/de/user/login');
        $I->see('Anmelden');
        $I->makeScreenshot('language-de');

        $I->amOnPage('/en-us');
        $I->see('Not Found');
    }
}
