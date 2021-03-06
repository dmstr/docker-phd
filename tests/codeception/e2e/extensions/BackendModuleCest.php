<?php
/**
 * @group mandatory
 * @group backend-module
 */
class BackendModuleCest
{
    // tests
    public function tryToTest(E2eTester $I)
    {
        $I->wantTo('ensure that Backend works');

        $I->amGoingTo('try to login with correct credentials');
        $I->login('master', 'master1');

        $I->amGoingTo('test backend menu');
        $I->amOnPage('/backend');
        $I->dontSee('Backend navigation');
        $I->click('.sidebar-toggle.btn');
        $I->see('Backend navigation');
    }
}
