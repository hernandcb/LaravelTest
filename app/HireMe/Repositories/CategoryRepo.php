<?php namespace HireMe\Repositories;

use HireMe\Entities\Category;

class CategoryRepo {

	public function find($id){
		return $category = Category::find($id);
	}
}