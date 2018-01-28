<!DOCTYPE html>
<html>
<head>
<style>
#container {
	position: relative;
	width: 810px;
    padding: 0;
	overflow: hidden;
    background-color: #333;
	
}
.wrap {
	
	margin-left: 120px;
	
}

.dropbtn {
    background-color: #333;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	border-radius: 10px;
}

.dropdown {
    position: relative;
    display: inline-block;
	
}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #434343;
}
</style>
</head>
<body>
<div id="container">
	<div class="wrap">
	<div class="dropdown">
	<button class="dropbtn">Dropdown</button>
	<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
	</div>
	</div>
	<div class="dropdown">
	<button class="dropbtn">Dropdown</button>
	<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  </div>
</div>
</div>

</body>
</html>