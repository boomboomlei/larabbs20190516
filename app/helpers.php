<?php

/**
 * @Author: xuebingsi
 * @Date:   2019-05-23 10:52:34
 * @Last Modified by:   zhibinm
 * @Last Modified time: 2019-05-28 16:01:11
 */
function route_class(){
	return str_replace('.','-',Route::currentRouteName());
}


function category_nav_active($category_id){
	return active_class((if_route('categories.show') && if_route_param('category',$category_id)));
}


function make_excerpt($value,$length=200){
	$excerpt=trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
	return str_limit($excerpt, $length);
}