<?php
class breadcrumb{
	public $link;
	
	public function add($name,$link){
		
		$this->link[] = array("name"=>$name,"link"=>$link);
		
	}
	public function display(){
		$str = '<div id="inner"><ol itemscope itemtype="https://schema.org/BreadcrumbList">';
		foreach($this->link as $k=>$v){
			$str.="<li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'><a itemtype='https://schema.org/Thing' itemprop='item' href='".$v['link']."'><span itemprop='name'>".$v['name']."</span></a><meta itemprop='position' content='".($k+1)."' /><i class='glyphicon glyphicon-menu-right'></i>";
		}
		$str.="</ol></div>";
		return $str;
	
	}
}