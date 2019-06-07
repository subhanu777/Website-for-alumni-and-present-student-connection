<!doctype html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">

<link href="../web2/style.css" type="text/css" rel="stylesheet">
<link href="../web2/grid.css" type="text/css" rel="stylesheet">


<style>

body{
    
    width:100%;
    margin:0;
    padding:0;
    font:13px/25px arial;
    color:#484848;
    background-color:#fff;
}

/**********************header*******************************/
header{
    
    width:100%;
    background: url("images/header-bg.jpg") 0 0 repeat;
    border:thin solid black;
}

h1{
    
   margin-left:300px;
margin-bottom:20px;
margin-top:16px;
position:relative;
float:left;
    
}
/*******************navigation bar***********************************/
nav{
    
    display:inline-block;
z-index:2;
position:relative;
    margin-bottom: 20px;
    margin-top:50px;
    margin-right:50px;
  
}

ul.menu li{
    margin:0;
    padding:0;
    list-style: none;
}

ul.menu{
    
    float:right;
    position: relative;
    margin:50px;
}

ul.menu li{
    
    float:left;
    position: relative;
    margin:30px;
}

ul.menu li a{
    
    font-size:20px;
line-height:30px;
color:red;
display:inline-block;
}

ul.menu li a:hover , ul.menu li.current a{
    
    font-size:20px;
line-height:30px;
color:black;
display:inline-block;
}


div.clear{
    clear:both;
    width:100%;
}

</style>



</head>
<body>
<main>

    <header>
        <div>
        <h1><a href="index.php"><img src="images/logo.png"></a></h1>
        <nav>
            
            <ul class="menu">
                <li class="current"><a>Home</a></li>
                <li ><a>About</a></li>
                <li ><a>services</a></li>
                <li ><a>Products</a></li>
                <li ><a>contact us</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
        </div>
    </header>
    
    
    
    <section>
    
    </section>
    <footer>
    
    </footer>
    
    
</main>
</body>
</html>









