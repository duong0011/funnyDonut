<?php 

	function convertLink($link, $page)
	{
		$uri = explode('&', $link);
		if(str_contains(end($uri),"page=")) {
			return str_replace(end($uri), "page=".$page, $link);
		}
		return $link.'&page='.$page;
	}
?>