$(document).ready(function(){
	getResult();
});

$('a').on('click',function(){
	var type = $(this).data('type');
	var val = $(this).data('id');
	if(type=='launch_year'){
		$("a[data-type='launch_year']").removeClass('active');
		$(this).addClass('active');
		var param = '&launch_year='+val;
		$("a[data-type='launch_success']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&launch_success='+$(this).data('id');
			}
		});
		$("a[data-type='land_success']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&land_success='+$(this).data('id');
			}
		});
	}
	if(type=='launch_success'){
		$("a[data-type='launch_success']").removeClass('active');
		$(this).addClass('active');
		var param = '&launch_success='+val;
		$("a[data-type='launch_year']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&launch_year='+$(this).data('id');
			}
		});
		$("a[data-type='land_success']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&land_success='+$(this).data('id');
			}
		});
	}
	if(type=='land_success'){
		$("a[data-type='land_success']").removeClass('active');
		$(this).addClass('active');
		var param = '&land_success='+val;
		$("a[data-type='launch_success']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&launch_success='+$(this).data('id');
			}
		});
		$("a[data-type='launch_year']").each(function(obj){
			if($(this).hasClass("active")){
			param += '&launch_year='+$(this).data('id');
			}
		});
	}
	getResult(param);
})




function getResult(param){

	$.ajax({
        type:'get',
        url:'https://api.spaceXdata.com/v3/launches?limit=100'+param,
        
        success:function(data)
        {   
        	var searchlist='';
        	console.log(data.length);
        	if(data.length>0){
	        	$.each(data,function(index,item){
	        			
	        			searchlist+='<div class="col-lg-3 col-md-6 col-xs-12 box">\
		      			<div class="card">\
							<div class="card-body">\
					        	<div class="img-box">\
						      		<img class="card-img-top" src="'+item.links.mission_patch_small+'" alt="Card image cap">\
						      	</div>\
						      	<div class="row"><div class="col-12"><h5 class="card-title">'+item.mission_name+' #'+item.flight_number+'</h5></div></div>\
							    <div class="row"><div class="col-6"><b>Mission Ids:</b> </div><div class="col-6">'+item.mission_id+'</div></div>\
							    <div class="row"><div class="col-6"><b>Lunch Year:</b> </div><div class="col-6">'+item.launch_year+'</div></div>\
							    <div class="row"><div class="col-6"><b>Successful Lunch:</b></div><div class="col-6">'+item.launch_success+'</div></div>\
							    <div class="row"><div class="col-6"><b>Successful Landing:</b></div><div class="col-6"> '+item.rocket.first_stage.cores[0].land_success+'</div></div>\
						    </div>\
						</div>\
				    </div>';
	        	})
        	}else{
        		var searchlist='<div class="card col-md-12 col-sm-12 text-center pr-3 pl-3"><h3>No Record Found!</h3></div>';
        	}
        	$('#searchlist').html(searchlist);
        }
    });
}


