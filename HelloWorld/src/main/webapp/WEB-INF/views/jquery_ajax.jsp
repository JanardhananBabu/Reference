<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>jQuery + Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("jquery_ajax.jsp",
        {
          name: "Donald Duck",
          city: "Duckburg"
        },
        function(data,status){
            $("div").text($("input[name='name']").val());
        });
    });
    $("form").submit(function(){
        alert("Form Submitted");
    });
});
</script>
</head>
<body>
<form action="test.jsp">
  First name: <input type="text" name="name"/><br>
  <input type="submit" value="Submit">
</form> 
<button>Ajax Test</button>
<div></div>
</body>
</html>