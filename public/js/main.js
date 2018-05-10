var a = true;
$(function(){
  	$('.my-tabl').each(function(){
    	var trs = $(this).find('tr').length;
      for(i=3;i<trs;i++){
      	$(this).find('tr:eq('+i+')').addClass('hide');	
    	}
   });
   $('.open_add').click(function(){
   	if (a){
   		var tab = $(this).prev();
    		tab.find('.hide').show(500);
    		$(this).text('close');
    		a = false;	
   	}
   	else{
      	var tab = $(this).prev();
      	var trs = tab.find('tr').length;
     		for(i=3;i<trs;i++){
      		tab.find('.hide').hide(500);
      		$(this).text('open');
      		a = true;	
    		}	
   	}
   }); 
});


