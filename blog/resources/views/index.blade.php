@extends('layout')
<div class="container">
@section('container')
<div class="split left">
      <section class="container">
            		<center>
                		<img class="mySlides" src="image/p9.jpg" style="height:40% width:60%">
		                <img class="mySlides" src="image/a2.png" style="height:40% width:60%">
		                <img class="mySlides" src="image/p10.jpg" style="height:40% width:60%">
		                <img class="mySlides" src="image/a3.jpg" style="height:40% width:60%">
                        <img class="mySlides" src="image/pic12.jpeg" style="height:40% width:60%">
                        <img class="mySlides" src="image/image.jpg" style="height:40% width:60%">
                        <img class="mySlides" src="image/a1.jpg" style="height:40% width:60%">
		            </center>                  
    			</section>

     <script>
            var myIndex = 0;
                carousel();

                function carousel() 
                {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    
                    for (i = 0; i < x.length; i++) 
                    {
        
                    x[i].style.display = "none";
                    }
                    myIndex++;
                    
                    if (myIndex > x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 3000);
                }
        </script> 
        
  
      </div>
      <div class="split right">
      <h1>h11</h1>
      </div>
@endsection
            </div>