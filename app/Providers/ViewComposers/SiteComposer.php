<?php
	namespace App\Providers\ViewComposers;
	use Illuminate\View\View;
	use App\Catalog;

	Class SiteComposer {
		public function compose(View $view){
			$catalogs = Catalog::where('type','main')->get();
			$view->with('catalogs',$catalogs);
		}
	}