<footer>
     

        <div class="container text-center col-sm-7"> <hr>
            <h3 class="text-center">Subscribe for more free stuff</h3>
            <p>Enter your name and email</p>
            <div class="container">
            <form class="form-inline" method="POST" action="{{url('subscribe_second')}}">  

                  @csrf


                    <label for="name" class="mr-sm-2">Name:</label>
                    <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="name">

                    <label for="email" class="mr-sm-2">Email address:</label>
                    <input type="email" name="email" class="form-control mb-2 mr-sm-2" id="email">
                    
                    
                    <button type="submit" class="btn btn-outline-success mb-2">Submit</button>
            </form>

             @if ($flash = session('successsecond'))
                     <div class="alert alert-success">
                       {{ $flash }}
                     </div>
                  @endif

            @include ('forms.errors_second')
      </div>
      
      
      <hr>
        </div>
        
    

        <ul class="list-inline text-center">
          <li><a href="http://www.twitter.com">Twitter</a></li>
          <li><a href="http://www.facebook.com">Facebook</a></li>
          <li><a href="http://www.youtube.com">YouTube</a></li>
        </ul>

        <p class="text-center">&copy; Copyright @ 2019 | Made by CM</p>

      </div><!-- end Container-->
      

    </footer>