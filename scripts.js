const shouts = document.getElementById("shouts");
// shouts_scroll.scrollTop = shouts_scroll.scrollHeight;

var textUser = document.getElementById("text_user");
var textMessage = document.getElementById("text_message");

const checkString =()=>{
    if(1 == 1){
        console.log("true")
    }else{
        console.log("false")
    }
}

onInputFun = function(scrollTop, scrollHeight){
    setTimeout(function(){
        document.getElementById("shouts").scrollTop = scrollHeight;
    },100);

}

const onloadTop =()=>{
    setTimeout(function(){
        document.getElementById("shouts").scrollTop = document.getElementById("shouts").scrollHeight;
    },100);
}

window.onload = onloadTop();




