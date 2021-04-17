$(document).ready(function () {
    // Listen for clicks to "img" elements inside the element where id="sinistra"
    $(document).on('click','.ImgDYOB1',function(){
		$('.ImgDYOB1').removeClass('active');
		let type='.jpg';
		if($(this).data('type') && $(this).data('type') == 'png'){
			type = '.png';
		}
		var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type; 
        $("#step1").attr('src',tubImg);
        $("#step1").show();
		$(this).addClass('active');
		ajaxFunction({'step1': tubImg,'step1_name': $(this).data("name")});
        return false;
   });
   
   
	$(document).on('click','.ImgDYOB2',function(){
	   $('.ImgDYOB2').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step2").attr('src',tubImg);
	   $("#step2").show();
	   $(this).addClass('active');
	   ajaxFunction({'step2': tubImg,'step2_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','.ImgDYOB3',function(){
	   $('.ImgDYOB3').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step3").attr('src',tubImg);
	   $("#step3").show();
	   $(this).addClass('active');
	   ajaxFunction({'step3': tubImg,'step3_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','.ImgDYOB4',function(){
	   $('.ImgDYOB4').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step4").attr('src',tubImg);
	   $("#step4").show();
	   $(this).addClass('active');
	   ajaxFunction({'step4': tubImg,'step4_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','.ImgDYOB5',function(){
	   $('.ImgDYOB5').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step5").attr('src',tubImg);
	   $("#step5").show();
	   $(this).addClass('active');
	   ajaxFunction({'step5': tubImg,'step5_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','.ImgDYOB6',function(){
	   $('.ImgDYOB6').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step6").attr('src',tubImg);
	   $("#step6").show();
	   $(this).addClass('active');
	   ajaxFunction({'step6': tubImg,'step6_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','.ImgDYOB7',function(){
	   $('.ImgDYOB7').removeClass('active');
	   let type='.jpg';
	   if($(this).data('type') && $(this).data('type') == 'png'){
		type = '.png';
		}
	   var tubImg = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+$(this).attr("class").split(' ').pop()+type;
	   $("#step7").attr('src',tubImg);
	   $("#step7").show();
	   $(this).addClass('active');
	   ajaxFunction({'step7': tubImg,'step7_name': $(this).data("name")});
        return false;
	});
	
	$(document).on('click','button[class="btn rect-button buy_Now"]',function(){
		$('div[class="mainOuterDiv design-details"]').hide();
		$('div[class="payment-getway"]').show();
			
	});
});


function rtrim(str) {
   var pearl = str.replace((!'pearl') ? new RegExp('\\s+$') : new RegExp('pearl'+'+$'), '');
   var whitemarble = pearl.replace((!'whitemarble') ? new RegExp('\\s+$') : new RegExp('whitemarble'+'+$'), '');
   var ivorymarble = whitemarble.replace((!'ivorymarble') ? new RegExp('\\s+$') : new RegExp('ivorymarble'+'+$'), '');
   return ivorymarble;
 }
 
 function rtrim2(str) {
   var pearl = str.replace((!'brushednickel') ? new RegExp('\\s+$') : new RegExp('brushednickel'+'+$'), '');
   var whitemarble = pearl.replace((!'oilrubbedbronze') ? new RegExp('\\s+$') : new RegExp('oilrubbedbronze'+'+$'), '');
   // var ivorymarble = whitemarble.replace((!'ivorymarble') ? new RegExp('\\s+$') : new RegExp('ivorymarble'+'+$'), '');
   var whites = whitemarble.replace((!'white') ? new RegExp('\\s+$') : new RegExp('white'+'+$'), '');
   return whites;
 }
 
 
 function getImage(id,index,number,name){
    var tubImg = $("#step1").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim(tubImg_2)+name+'.jpg';
	ajaxFunction({'step1': tubImg_3});
    $("#step1").attr('src',tubImg_3);
 }
 
 function getImage2(id,index,number,name){
    var tubImg = $("#step2").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim(tubImg_2)+name+'.jpg';	
	ajaxFunction({'step2': tubImg_3});
    $("#step2").attr('src',tubImg_3);
 }
 
 function getImage3(id,index,number,name){
    var tubImg = $("#step3").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim2(tubImg_2)+name+'.jpg';	
	ajaxFunction({'step3': tubImg_3});
    $("#step3").attr('src',tubImg_3);
 }
 
 function getImage4(id,index,number,name){
    var tubImg = $("#step4").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim(tubImg_2)+name+'.jpg';	
	ajaxFunction({'step4': tubImg_3});
    $("#step4").attr('src',tubImg_3);
 }
 
 function getImage5(id,index,number,name){
    var tubImg = $("#step5").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim(tubImg_2)+name+'.jpg';
	ajaxFunction({'step5': tubImg_3});	
    $("#step5").attr('src',tubImg_3);
 }
 
 function getImage6(id,index,number,name){
    var tubImg = $("#step6").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim2(tubImg_2)+name+'.jpg';	
	ajaxFunction({'step6': tubImg_3});	
    $("#step6").attr('src',tubImg_3);
 }
 
 function getImage7(id,index,number,name){
    var tubImg = $("#step7").attr('src').split('/').pop();
    var tubImg_2 = tubImg.split('.').shift();
    var tubImg_3 = $('meta[name="csrf-token"]').data('url')+'/assets/images/'+rtrim2(tubImg_2)+name+'.jpg';	
	ajaxFunction({'step7': tubImg_3});	
    $("#step7").attr('src',tubImg_3);
 }
 
 function clearSelection(input){
	$(document).ready(function(){
		$("#"+input).attr('src','');
		$("#"+input).hide();
	});
 }
 
 
 function ajaxFunction(input){
	 
	$(document).ready(function(){
		$('button[class="btn rect-button"]').prop('disabled', false);
		 $.ajax({
			url: $('meta[name="csrf-token"]').data('url_parm'),
			type: 'POST',
			dataType: "JSON",
			headers : {
					'X-CSRF-Token': $('meta[name="csrf-token"]').data('csrf')
			},
			data: input,
			success: function (response)
			{
				
			}
		});
	});
	
 }
 