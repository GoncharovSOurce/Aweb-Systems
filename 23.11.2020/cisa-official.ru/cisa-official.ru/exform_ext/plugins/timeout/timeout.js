(function($){
 $(document).ready(function(){

 ck = 'timeout-3';
 to = 5; 

 function timeout(){
  if(!$.cookie(ck)){ 
   $.cookie(ck, 1, {expires:365, path:'/'});
   timeout();
  }
  else{
   if($.cookie(ck) != 'already'){
    s = parseInt($.cookie(ck)) + 1;
    if(s < to){ 
     $.cookie(ck, s , {expires:365, path:'/'});
	 setTimeout(timeout, 1000);
    }
    else{
     $.cookie(ck, 'already' , {expires:365, path:'/'});
	 $('.timeout').exform({theme:'exf_anketa', autoshow:true});
    }
   }
   //$('.timeout').text(s);
  }
 }
 
timeout();

 })  
})(jQuery) 