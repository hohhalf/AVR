$(function(){   
  /*  var table2_Props =  {                     
                    col_0: "select",  
                    col_1: "select",
                    col_2: "select",
                    col_4: "none",  
                    display_all_text: " Все ",  
                    sort_select: true,  
                    exact_match: true,  
                    alternate_rows: true,  
                    rows_counter: true,  
                    rows_counter_text: "Всего: ",  
                    btn_reset: true
                };  
    var tf2 = setFilterGrid( "main-table",table2_Props ); */





	function filterByCols(table,col,mode){
			if (mode !== "clear") {
				var criteria = $('input:text[data-col="'+col+'"]').val();
    			table.find('tbody tr td[data-col="'+col+'"]').each(function(i){
    				if ($(this).text().indexOf(criteria)>-1) {
    					$(this).parent().data('crit', true);
    					console.log($(this).parent().data('crit'));
    				}else {
    					$(this).parent().data('crit', false);
    				}
    			});
    			table.find('tbody tr').each(function(i){
    				if (!$(this).data('crit')) {
    					$(this).hide();
    				};
    			});
			}else {
				table.find('tbody tr').each(function(i){
    				if (!$(this).data('crit')) {
    					$(this).data('crit',false);
    					console.log($(this).data('crit'));
    					$(this).show();
    				}
    				
    			});
			}	
    			
    }







   $('input:checkbox').change(function(){
   		var col = $(this).data('col');
   		var table = $('.main-table');
   		if ($(this).prop('checked')) {

   			filterByCols(table,col,"filter");
   		} else {
   			filterByCols(table,col,"clear");
   			$('input:checkbox').each(function(){
   				$(this).prop('checked',false);
   			});
   		}
   			
   		
   		
   });

    
});
    
