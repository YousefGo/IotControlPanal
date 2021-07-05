@extends('../app')

@section('content')


    <div class="col-md-12  p-1 text-center m-2 ">


        <span>

            <i class=" fas fa fa-solid fa-robot text-primary head mb-4">
                Control Robot base Engine


            </i>
        </span>


  

    </div>

    <div class=" container text-center mt-4">

   
    <form action="{{route('engine.addMove')}}" method="post" id="moveControl">
        @csrf
        <div class="row mb-4">

            <div class="col md-12    d-flex  justify-content-center  ">
                <button type="submit" value="up" id="up" class="fas fa-arrow-alt-circle-up   btn btn-lg btn-warning text-dark ">
                

            </div>

        </div>
        <div class="row   justify-content-center ">
            <div class="col-md-4 col-4    d-flex  justify-content-end  ">
                
                
             
                <button type="submit"  value="right"  id="right" class="fas fa-arrow-alt-circle-right d-flex justify-content-end btn btn-lg btn-primary  text-light">
                </button>

            </div>
       
               
            <div class="col-md-1 col-4   ">
                    <button type="submit"  value="stop"   id="stop" class="far fa-stop-circle btn btn-lg btn-danger">
                    </button>


            </div>



            <div class="col-md-4 col-4  d-flex  justify-content-start   ">
                  

                    <button type="submit"  value="left"   id="left" class="fas fa-arrow-alt-circle-left d-flex justify-content-start btn btn-lg   btn-primary   text-light ">
                    </button>
            </div>
        </div>


        <div class="row mt-4">

            <div class="col md-12      d-flex  justify-content-center ">

                    <button type="submit"  value="down"   id="down" class=" fas fa-arrow-alt-circle-down btn btn-lg   btn-primary justify-content-center  text-light">
                    </button>
            </div>

        </div>        

    </form>
      
    <div class="movelist">
        
    </div>

       


    </div>

 
 <script> 




    $('#up').click(function(){
    event.preventDefault();
   let _token = $("input[name=_token]").val();  
  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      context:this,
      data:{
        move:this.value,
        _token : _token ,
      },
      success:function(reponse){
       if(reponse)
          {
             console.log(reponse);
          }
      }
      }

  ); 

 });




 $('#left').click(function(){
    event.preventDefault();
   let _token = $("input[name=_token]").val();  
  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      context:this,
      data:{
        move:this.value,
        _token : _token ,
      },
      success:function(reponse){
       if(reponse)
          {
             console.log(reponse);
          }
      }
      }

  ); 

 });



 $('#right').click(function(){
    event.preventDefault();
   let _token = $("input[name=_token]").val();  
  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      context:this,
      data:{
        move:this.value,
        _token : _token ,
      },
      success:function(reponse){
       if(reponse)
          {
             console.log(reponse);
          }
      }
      }

  ); 

 });



 $('#down').click(function(){
    event.preventDefault();
   let _token = $("input[name=_token]").val();  
  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      context:this,
      data:{
        move:this.value,
        _token : _token ,
      },
      success:function(reponse){
       if(reponse)
          {
             console.log(reponse);
          }
      }
      }

  ); 

 });



 $('#stop').click(function(){
    event.preventDefault();
   let _token = $("input[name=_token]").val();  
  $.ajax(
      {
      url:"{{route('engine.addMove')}}",  
      type:'POST',
      context:this,
      data:{
        move:this.value,
        _token : _token ,
      },
      success:function(reponse){
       if(reponse)
          {
             console.log(reponse);
          }
      }
      }

  ); 

 });




   </script>








@endsection
