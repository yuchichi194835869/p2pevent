$(function(){
	
	$(".aaa").on("click",function(){
		if($(this).siblings("ul").css("display")=='block'){
			
			$(this).siblings("ul").addClass("none");
		}else{
			
			$(this).siblings("ul").removeClass("none").addClass("in")
		}		
	})	
})
 