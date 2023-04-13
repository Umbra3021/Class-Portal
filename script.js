$("ul > li > a").click(function(){//click event on button
    $("#f").load(this.getAttribute("href"));
    return false;
  });

function record(){
  window.location.href="index.html";
}
  
function add(){
  window.location.href="fillup.html";
}
