$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#tj_btn").click(function(){
        var phoneno = $("#phonenum").val();
        var name = $("#guestname").val();
        var note = $("#note").val();
        var host=window.location.href;
        if(!name)
        {
            alert('请输入你们的姓名方便我们与您联系')
        }else{
            if( phoneno  && /^1[3|4|5|8]\d{9}$/.test(phoneno ) ){
                $.ajax({
                    type:"POST",
                    url:"/phonecomplate/",
                    //dataType: 'JSON',
                    data:{"phoneno":phoneno,"host":host,"name":name,"note":note},
                    datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                    success:function (response, stutas, xhr) {
                        alert(response);
                        $("#tj_btn").attr("disabled","disabled");
                    }
                });
            } else{
                alert("您输入的手机号码"+result+"不正确，请重新输入")
            }
        }
    });
    $(".display").on("click",function(){
        $(this).hide()
        $(".jm_xq_con").removeClass("on")
        $(this).next().show()
    });
    $(".cont-btn").on("click",function(){
        $(this).hide()
        $(".cont-box").height("auto")
    });
    $(".hidden").on("click",function(){
        $(this).hide()
        $(this).prev().show()
        $(".jm_xq_con").addClass("on")
    });
    $("#mulu").click(function() {
        $(".mulu-list").toggle()
    })
    $(".a_content img").attr({"width":"100%",'height':'auto'}).addClass("img-responsive center-block").css('width','100%').css('height','auto').css('border-radius','5px');
    $(".jm_xq_con img").attr({"width":"100%",'height':'auto'}).addClass("img-responsive center-block").css('height','auto').css('width','100%').css('border-radius','5px');

});