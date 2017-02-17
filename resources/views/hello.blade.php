<html>
    <head>
    <title></title>
</head>
<body>
<form method ="post"action="/hello">
Enter num 1:<input type="text" name="num1"/><br>
Enter num 2:<input type="text" name="num2"/><br>
<input type="submit"value="Add">
{{csrf_field()}}
</form>
</body>
</html>