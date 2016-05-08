<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ajax</title>
<script>
function sayHi() {
var xRequest;
var name=document.getElementsByName("name")[0].value;
if(name=="") {
document.getElementById("display_area").innerHTML="Welcome";
return;
}
if(window.XMLHttpRequest) {
xRequest=new XMLHttpRequest();
}
else {
xRequest=new ActiveXObject("Microsoft.XMLHTTP");
}
xRequest.onreadystatechange=function () {
if((xRequest.readyState==4) && (xRequest.status==200)) {
document.getElementById("display_area").innerHTML="Hi "+name;
}
};
xRequest.open("POST","ajaxdemo",true);
xRequest.send();
}
</script>
</head>
<body>
<form name="form" method="post" action="test.jsp">
<p>Enter your name : <input name="name" type="text"/>
<input value="Say Hi !" type="button" onclick="sayHi()"/></p><br>
<input type="submit" value="Submit"/><br>
<div id="display_area"></div>
</form>
</body>
</html>