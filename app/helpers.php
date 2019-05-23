<?php

/**
 * @Author: xuebingsi
 * @Date:   2019-05-23 10:52:34
 * @Last Modified by:   zhibinm
 * @Last Modified time: 2019-05-23 11:19:26
 */
function route_class(){
	return str_replace('.','-',Route::currentRouteName());
}