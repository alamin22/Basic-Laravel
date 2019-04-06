<!DOCTYPE html>
<html>
<head>
	<title>my page: @yield('title')</title>
    <style type="text/css">
        .banner{
            width:100%;
            height:90px;
            background: black;
            color:white;
        }
        .sub_banner1{
            float:left;
            width:15%;
            height:90px;
        }
        .sub_banner2{
            float:right;
            width:15%;
            font-size: 24px;
            height:90px;
            text-align: center;
        }
        .sub_banner2 a:hover{
         color:white;
         font-size: 24px;
         background: red
        }
        .footer{
            width:100%;
            height:80px;
            background: black;
            color:white;
        }
        .container{
            width:100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <section class="banner">

        <div class="sub_banner1">
            @yield('sub_banner1')
        </div>

        <div class="sub_banner2">
             @yield('sub_banner2')
        </div>
        
    </section>
    <section class="header"> 
         
         @yield('header')

    </section>

    <section class="container">
    	 
    	 @yield('container')

    </section>

    <section class="footer">  
        
         @yield('footer')

    </section>

</body>
</html>