$(document).ready(function(){
$(".submit-btn").click(function(e){
e.preventDefault();
$.ajax({
type:"POST",
url:"php/sign_up.php",
data:{
    fullname:btoa($("#fullname").val()),
    username:btoa($("#email").val()),
    password:btoa($("#password").val())
},
beforeSend:function(){
    $(".submit-btn").html("Processing plese wait.....");
    $(".submit-btn").attr("disabled","disabled");
},
success:function(response)
{
    if(response.trim()=="sending success")
    {
        $("#signup-form").fadeOut(500,function(){
            $(".activator").removeClass("d-none");
        });
       
    } 
    else{
        var message=document.createElement("DIV");
        message.className="alert alert-warning";
        message.innerHTML="<b>Somthing went wrong please try again";
        $(".signup-notice").append(message);
        $(".submit-btn").html("Register Now");
        $("form").trigger('reset');
        $(".submit-btn").removeAttr("disabled");
        $(".email-loader").addclass("d-none");
        setTimeout(function(){
            $(".signup-notice").html("");
        },2000);
    }
}
});
});
});