<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Testing JSP</title>
</head>
<body>
	<h1>
		<div id="msg"></div>
	</h1>
	${msg}
	<%
		String name = request.getParameter("name");
		if (name.length() > 0) {
	%>
	<script>
		document.getElementById("msg").innerHTML = "Welcome "+"<%=name%>";
	</script>
	<%
		}
	%>

</body>
</html>