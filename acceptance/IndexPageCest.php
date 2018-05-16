<?php
class IndexPageCest {
	public static $url = '/cgi-bin/fsearch/fast.cgi';
	public function _before(AcceptanceTester $I) {
	
	}
	public function _after(AcceptanceTester $I) {
	
	}
	public function goToPage(AcceptanceTester $I) {
		$I->amOnPage ( self::$url );
		$I->see ( '中古車', [ 'class' => 'on' ] );
	
	}
	public function testPager(AcceptanceTester $I) {
		$I->amOnPage ( self::$url );
		$I->click ( '2', 'div.pager ul li' );
		// check active on this page
		$I->see ( '2', 'li.act a' );
	
	}
	public function changeMenuTab(AcceptanceTester $I) {
		$I->amOnPage ( self::$url );
		$I->click ( 'パーツ' );
		// check menu is active
		$I->see ( 'パーツ', [ 'class' => 'on' ] );
	
	}
	// test finter with 人気の条件
	
	public function finterConditionInspect(AcceptanceTester $I) {
		$I->amOnPage ( self::$url );
		$I->click ( '修復歴なし' );
		// check search on list condition
		$I->see ( '修復歴なし', [ 'class' => 'listSearchCondition' ] );
	
	}
	// test finter with 販売店選択
	public function finterConditionPrefNum(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( '北海道', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( '北海道', [ 'class' => 'listSearchCondition' ] );
		
	}
	// test finter with おすすめ条件
	public function finterConditionRecDealer(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( 'ディーラー車', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( 'ディーラー車', [ 'class' => 'listSearchCondition' ] );
		
	}
	// test finter with メーカー
	public function finterConditionMaker(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( 'トヨタ', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( 'トヨタ', [ 'class' => 'listSearchCondition' ] );
		
	}
	// test finter with ボディタイプ
	public function finterConditionBody(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( 'クーペ', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( 'クーペ', [ 'class' => 'listSearchCondition' ] );
		
	}
	// test finter with ミッション
	public function finterConditionMission(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( 'CVT', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( 'CVT', [ 'class' => 'listSearchCondition' ] );
		
	}
	// test finter with 詳細条件
	public function finterConditionDetailSpeedMitumori(AcceptanceTester $I) {
		
		$I->amOnPage ( self::$url );
		$I->click ( 'スピード見積り', 'ul.autocomplete li a' );
		// check search on list condition
		$I->see ( 'スピード見積り', [ 'class' => 'listSearchCondition' ] );
		
	}
}