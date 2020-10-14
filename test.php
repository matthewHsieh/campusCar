 <?php header('refresh: 30;url="test.php"') ?>
 
 <?php
    $folder = "Pic";
    $files = array();
   $handle = opendir($folder);
    while(($file=readdir($handle))!==false){
        if($file!='.' && $file!='..'){
    	    $hz=strstr($file,".");
            if($hz==".png") 
    	        $files[] = $file; 
        }
    }
    $filesTemp = array();
	if($files){
	    foreach($files as $k=>$v){
			
            array_unshift($filesTemp,$v);
        }
	}
	echo "下列將會顯示已由後到前的方式，來顯示最後的10張圖 : <br>";
	$count = 0;
    if($files){
        foreach($filesTemp as $k=>$v){
			if($count == 10)
				break;
			echo $v;
			echo ' : ';
            echo '<img widht=160 height=120 src="'.$folder.'/'.$v.'">';
			echo '<br>';
			$count++;
        }
    }
  ?>
  
  