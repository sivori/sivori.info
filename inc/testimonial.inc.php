<? 
srand((double)microtime()*1000000); 
$arry_txt=preg_split("/--NEXT--/",join('',file("quotes.txt"))); 

echo$arry_txt[rand(0,sizeof($arry_txt)-1)]; 
?> 