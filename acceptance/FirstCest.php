<?php

class FirstCest {

	public static $url = '/cgi-bin/fsearch/goo_used_search.cgi?category=USDN';

	public function frontpageWorks(AcceptanceTester $I) {

		$I->amOnPage ( self::$url );
		$I->see ( "中古車 テキスト検索結果" );				
	}
	
	public function frontpageSearch(AcceptanceTester $I) {
		$I->fillField("//input[@type='text'][@name='phrase']", "honda");
		$I->click("#btn_submit");
		$I->see ('"honda"');
		$I->makeScreenshot('Home_page_search');
	}
	
}