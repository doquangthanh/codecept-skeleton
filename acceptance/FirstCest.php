<?php

class FirstCest {
	public function frontpageWorks(AcceptanceTester $I) {
		$I->amOnPage ( '/ipn/cgi-bin/fsearch/fast.cgi?category=USDN&phrase=a&query=a' );
		$I->seeInSource ( "中古車 テキスト検索結果" );
		$I->fillField('#phrase_input', '');
		$I->appendField('#phrase_input', 'appended');
		$I->click('.searchBtn');
		$I->see('appended');
	}
	
}