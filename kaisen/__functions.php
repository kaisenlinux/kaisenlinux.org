<?php 

	$file = basename($_SERVER['PHP_SELF']);

	$title = title($file)[0];
	$body_class = title($file)[1];

	function title($file){
		switch ($file) {
		    
		    case 'index.php':
		        return [t_s(''),'index'];
		        break;

		    case 'downloads.php':
		        return [t_s('Downloads'),'download'];
		        break;		

		    case 'downloads.php':
		        return [t_s('Downloads'),'download'];
		        break;		

		    case 'contributors.php':
		        return [t_s('Contributors'),'team'];
		        break;		

		    case 'oldmembers.php':
		        return [t_s('Ex members'),'team'];
		        break;		

		    case 'partners.php':
		        return [t_s('Partners'),''];
		        break;		

		    case 'team.php':
		        return [t_s('Team'),'team'];
		        break;	

		    case 'team.php':
		        return [t_s('404'),'404'];
		        break;	


		}
	}


	function t_s($str){
		if( !empty($str) ){
			return ' | '.$str;
		}else{
			return '';
		}
	}






?>
