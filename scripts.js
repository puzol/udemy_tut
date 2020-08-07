var shouts_scroll = document.getElementById("shouts");
shouts_scroll.scrollTop = shouts_scroll.scrollHeight;

var textUser = document.getElementById("text_user");
var textMessage = document.getElementById("text_message");

setTimeout(shouts_scroll.reload(), 500);


