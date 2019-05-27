<?php

/**
 * @Author: xuebingsi
 * @Date:   2019-05-23 10:52:34
 * @Last Modified by:   zhibinm
 * @Last Modified time: 2019-05-27 15:07:18
 */
function route_class(){
	return str_replace('.','-',Route::currentRouteName());
}


function category_nav_active($category_id){
	return active_class((if_route('categories.show') && if_route_param('category',$category_id)));
}