   @extends("layout.main")

   @section('title','laravel')

   @section('header')
     
     <h2>practice page laravel framework</h2>

   @endsection

   @section('container')
     
     <h3>subject</h3>

       {{$name}}<br>
       {{$id}}
         <p>please do not quarrell with each other.and maitain author discipline.
           beacause every body are same and create for pray of GOds .dddddddddddddddddd
           ddddddddddddddddddddccccccccccvvvvvvvvvvvvvqqqqqqqqqqqqqwewewewewewewewewewe
 	     </p>
 	     @for($i=1;$i<4;$i++)
 	     
           {{'alamin'}}<br>
 	     @endfor

 	@endsection
 	   
   @section('footer')
 
        <h2>footer section here</h2>

   @endsection
    	
 	   
   