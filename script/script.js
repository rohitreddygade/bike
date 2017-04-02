$(document).ready(function () {
   $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
  
});


  function checkfield(){
    var e1 = document.getElementById("area");
    var e3 = document.getElementById("company");
    var e4 = document.getElementById("bikediv");
    var e5 = document.getElementById("stype");
/*    var e6 = document.getElementById("date_");*/
    var str1 = new Array(5);
    str1[0]  = e1.value;
    str1[1]  = e3.options[e3.selectedIndex].text;
    str1[2]  = e4.options[e4.selectedIndex].text;
    str1[3]  = e5.options[e5.selectedIndex].text;
   /* str1[4]  = e6.value;*/
    var x=0;
    for (i = 0; i < str1.length; i++) { 
     if(str1[i]=="" || str1[i]=="--Select--" || str1[i]=="undefined"){
       x=1;
       

   }
}
if(x==0){
    document.getElementById("submit").disabled = (1==0);
}else{
    document.getElementById("submit").disabled = (1==1);
}

}

function bikelist(company)
    {

        var xmlhttp;
        if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        document.getElementById("bikediv").innerHTML=xmlhttp.responseText;
        checkfield();
    }
}
xmlhttp.open("GET","docs/Service/bikelist.php?company="+company,true);
xmlhttp.send();
}
