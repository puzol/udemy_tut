const shouts = document.getElementById("shouts");
// shouts_scroll.scrollTop = shouts_scroll.scrollHeight;

var textUser = document.getElementById("text_user");
var textMessage = document.getElementById("text_message");

// const getScrollHeight =()=> {
//     return document.getElementById("shouts").scrollHeight;
// }

// const setScrollTop =()=>{
//     let value = 500;
//     document.getElementById("shouts").scrollTop = value;
//     console.log(document.getElementById("shouts").scrollTop + "is scroll top");
// }

// const returnScrollTop =()=>{
//     return setScrollTop();
// }

onInputFun = function(scrollTop, scrollHeight){
    // getScrollHeight();
    // setScrollTop();
    setTimeout(function(){
        document.getElementById("shouts").scrollTop = scrollHeight;
    },100);
    console.log("input Detected");
    // returnScrollTop();
    console.log(scrollHeight + " is height");
    console.log(scrollTop + " is top");
}

const onloadTop =()=>{
    setTimeout(function(){
        document.getElementById("shouts").scrollTop = document.getElementById("shouts").scrollHeight;
    },100);
}

window.onload = onloadTop();

// setTimeout(shouts_scroll.reload, 500);



