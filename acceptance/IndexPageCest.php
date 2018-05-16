<?php

class IndexPageCest {

	public static $url = '/cgi-bin/fsearch/goo_used_search.cgi';

	public function _before(AcceptanceTester $I) {

		
	}

	public function _after(AcceptanceTester $I) {

		
	}

	public function goToPage(AcceptanceTester $I) {

		$I->amOnPage ( self::$url );
		$I->seeInSource ( '<li class="on arrow-div"><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=USDN">中古車</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=CATN&amp;phrase=&amp;query=">カタログ</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=PTSN&amp;phrase=&amp;query=">パーツ</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=CLI&amp;phrase=&amp;query=">中古車販売店</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=CATNN&amp;phrase=&amp;query=">新車</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=CRV&amp;phrase=&amp;query=">クルマレビュー</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=SRVN&amp;phrase=&amp;query=">販売店レビュー</a></li>' );
		$I->seeInSource ( '<li><a href="/cgi-bin/fsearch/goo_used_search.cgi?category=TPC&amp;phrase=&amp;query=">ニュース</a></li>' );
		$I->makeScreenshot('Home_page');
	}

	public function TestRangePriceDistanceYearMinMax(AcceptanceTester $I) {

		$I->amOnPage ( self::$url . '?category=USDN&price1=250000' );
		$I->see ( "本体価格 : 25万円 以上" );
		
		$I->amOnPage ( self::$url . '?category=USDN&price2=500000&price1=250000' );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		
		$I->amOnPage ( self::$url . '?category=USDN&price2=500000&price1=250000&distance1=10000' );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		$I->see ( "走行距離 : 1.0万キロ 以上" );
		
		$I->amOnPage ( self::$url . '?category=USDN&price2=500000&distance2=95000&price1=250000&distance1=10000' );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		$I->see ( "走行距離 : 1.0万キロ 以上" );
		$I->see ( "走行距離 : 9.5万キロ 以下" );
		
		$I->amOnPage ( self::$url . '?category=USDN&price2=500000&distance2=95000&syear1=1992&price1=250000&distance1=10000' );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		$I->see ( "走行距離 : 1.0万キロ 以上" );
		$I->see ( "走行距離 : 9.5万キロ 以下" );
		$I->see ( "年式 : 1992年 / 平成4年 以上" );
		
		$I->amOnPage ( self::$url . '?category=USDN&price2=500000&distance2=95000&syear1=1992&price1=250000&syear2=2010&distance1=10000' );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		$I->see ( "走行距離 : 1.0万キロ 以上" );
		$I->see ( "走行距離 : 9.5万キロ 以下" );
		$I->see ( "年式 : 1992年 / 平成4年 以上" );
		$I->see ( '年式 : 2010年 / 平成22年 以下' );
		$I->makeScreenshot('slide_range');
	}

	public function TestRangeAndFilterOption(AcceptanceTester $I) {

		$I->click ( [ 
				'link' => 'MT' 
		] );
		$I->see ( "本体価格 : 25万円 以上" );
		$I->see ( "本体価格 : 50万円 以下" );
		$I->see ( "走行距離 : 1.0万キロ 以上" );
		$I->see ( "走行距離 : 9.5万キロ 以下" );
		$I->see ( "年式 : 1992年 / 平成4年 以上" );
		$I->see ( "年式 : 2010年 / 平成22年 以下" );
		$I->see ( "トランスミッション : MT" );
		$I->makeScreenshot('Slide_click_option');
		$I->click ( [ 
				'xpath' => '//label[@for="checkbox_color_30"]' 
		] );
		$I->see ( "カラー : ブラック系" );
		$I->makeScreenshot('Slide_click_color_black');
	}
	
	
}