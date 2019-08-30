﻿$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
});
jQuery(".brand_slide").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,startFun:function(i,p){if(i==0){ jQuery(".brand_slide .sPrev").click() } else if( i%4==0 ){ jQuery(".brand_slide .sNext").click()}}});jQuery(".brand_slide .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });
$(function(){
//app下拉	
$("#js_phone_app,#js_add_wx").hover(function(){
	$(this).addClass("hover");
	},function(){
	$(this).removeClass("hover");
});

////////////计算器 开始////////////
function total_num(){
	var num1=$("#num1").val();
	var num2=$("#num2").val();
	var num3=$("#num3").val();
	var num4=$("#num4").val();
	var num5=$("#num5").val();
	var num6=$("#num6").val();
	var num7=$("#num7").val();
	var num8=$("#num8").val();
	var num9=$("#num9").val();
	var num10=$("#num10").val();
	var num11=$("#num11").val();
	var total_num1=num1*1+num2*1+num3*1+num4*1+num5*1+num6*1+num7*1+num8*num9+num10*1+num11*1;
	return total_num1;
}
var num=total_num();
$("#total_num").html(num);

//文本框只能输入数字，并屏蔽输入法和粘贴  
$.fn.numeral = function() {     
	$(this).css("ime-mode", "disabled");     
	this.bind("keypress",function(e) {     
	var code = (e.keyCode ? e.keyCode : e.which);  //兼容火狐 IE      
		if(!$.browser.msie&&(e.keyCode==0x8))  //火狐下不能使用退格键     
		{     
			 return ;     
			}     
			return code >= 48 && code<= 57;     
	});     
	this.bind("blur", function() {     
		if (this.value.lastIndexOf(".") == (this.value.length - 1)) {     
			this.value = this.value.substr(0, this.value.length - 1);     
		} else if (isNaN(this.value)) {     
			this.value = "";     
		}     
	});     
	this.bind("paste", function() {     
		var s = clipboardData.getData('text');     
		if (!/\D/.test(s));     
		value = s.replace(/^0*/, '');     
		return false;     
	});     
	this.bind("dragenter", function() {     
		return false;     
	});     
	this.bind("keyup", function() {     
	if (/(^0+)/.test(this.value)) {     
		this.value = this.value.replace(/^0*/, '');     
		}     
	});     
};    
//调用文本框的id  
$("#num1,#num2,#num3,#num4,#num5,#num6,#num7,#num8,#num9,#num10,#num11").numeral(); 
$(".total_btn").click(function(){
	var num=total_num();
	$("#total_num").html(num);
});
////////////计算器 结束////////////

//内容页固定导航
$(document).scroll(function(){
	//获取窗口的滚动条的垂直位置
	var s = $(document).scrollTop();
	//当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
	if( s > 562){
		$(".fixed_nav").addClass("anchor_fixed");
	}else{
		$(".fixed_nav").removeClass("anchor_fixed");
		}

	if( s > 239){
		$(".side_nav").addClass("side_nav_fixed");
	}else{
		$(".side_nav").removeClass("side_nav_fixed");
		}
		
	if( s > 350){
		$(".ico-backtop").css("display","block");
	}else{
		$(".ico-backtop").css("display","none");
		}	
	
 });


 //快捷留言
   $(".check_msg_bd ul li a").click(function(){
	 $("#note").val($(this).text());
  });
  
 //关闭登录弹窗
  $("#login_popup_close").click(function(){
	  $(".login_popup_mask,.login_popup").hide();
  });
  
  
  //右侧固定
$(".ico-attention").hover(function(){
		$(".attention-code").stop();
		$(".attention-code").animate({"width":"140px"});
	},function(){
		$(".attention-code").stop();
		$(".attention-code").animate({"width":"0px"});
		
	});
$(".ico-backtop").click(function(){
	$("html,body").animate({scrollTop:0},500);
});



//右侧弹窗计算器

var slideFlag=true;
var clickFlag=true;

$(".ico-quoted").click(function(){
	$(".calculator_popup_mask,.calculator_popup").show();
	clickFlag=false;
});

//关闭弹窗
$("#calculator_popup_close").click(function(){
	$(".calculator_popup_mask,.calculator_popup").hide();
	clickFlag=true;
});

//不断上下滑动        
function shake(){
	if ($('.bottom_slide_up').css('top') == '-60px' || $('.bottom_slide_down').css('top') == '-50px') {
		$('.bottom_slide_up').stop().animate({top:'-42px'},500,function(){
			shake();    
		});
	}
	if ($('.bottom_slide_up').css('top') == '-42px') {
		$('.bottom_slide_up').stop().animate({top:'-60px'},500,function(){
			shake();    
		});
	}    
}
shake();
    $("#tj_btn").click(function(){
        var phoneno = $("#phonenum").val();
        var name=$("#guestname").val();
        var gender=$("input[name='Sex']:checked").val();
        var address=$("#addresss").val();
        var note=$("#note").val();
        var host=window.location.href;
        if( phoneno  && /^1[3|4|5|8]\d{9}$/.test(phoneno) ){
            $.ajax({
                type:"POST",
                url:"/phonecomplate/",
                data:{"phoneno":phoneno,"name":name,"gender":gender,"address":address,"note":note,"host":host},
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    alert(response);
                    //$("#results").html(response);
                }
            });
        } else{
            alert("您输入的手机号码"+phoneno+"不正确，请重新输入")
        }
    })
});
$(function(){ $(".body_tit img,.join_cont img").css('border-radius','5px');})