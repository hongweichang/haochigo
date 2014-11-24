<?php

/**
 * 菜单总表
 *
 * getClassify()	获取某个店铺菜单的分类
 */
 
 class Menu extends Eloquent{

	public $timestamps = false;

	protected $table = 'menu';

	public function shop(){
		return $this->belongsTo('Shop', 'shop_id', 'id');
	}

	public function comments(){
		return $this->hasMany('CommentMenu', 'menu_id', 'id');
	}

	public function activity(){
		
	}
}