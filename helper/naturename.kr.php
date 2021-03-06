<?php
/**
 * @file naturename.kr.php
 * @date 2018-04-15
 * @author Go Namhyeon <gnh1201@gmail.com>
 * @brief Korean nature name generator
 */

function naturename_kr_get_prefix_name() {
	$words = "김,이,박,최,정,강,조,윤,장,임,고";
	$prefix_names = explode(",", $words);
	shuffle($prefix_names);
	return $prefix_names[0];
}

function naturename_kr_get_suffix_name($year="", $gender="") {
	$words = "영자,정자,순자,춘자,경자,옥자,명자,숙자,정순,화자,영수,영호,영식,정웅,영길,영일,정수,정남,광수,중수,정숙,영숙,영순,영희,정희,옥순,영철,종수,정식,정호,영환,명숙,경숙,순옥,현숙,성수,성호,상철,경수,상호,미경,미숙,경희,미영,영미,영진,병철,진호,재호,은정,은주,은영,현주,은경,지영,현정,미정,정훈,성훈,성진,상훈,성민,상현,준호,선영,지연,혜진,지훈,민수,지혜,지은,수진,은지,아름,지현,보람,현우,동현,준영,진우,유진,민지,수빈,지원,현지,예진,예지,민석,준혁,승현,서연,민서,서현,서영,수민,예원,민준,민재,도현,현준,승민,지민,서윤,예은,하은,지우,윤서,준서,우진,건우,예준,지후,채원,하윤,지아,은서,서준,주원,시우,도윤";
	$suffix_names = explode(",", $words);
	shuffle($suffix_names);
	return $suffix_names[0];
}

function naturename_kr_get_generated_name() {
	return naturename_kr_get_prefix_name() . naturename_kr_get_suffix_name();
}
