
<div class="container text-center col-sm-6">

    <h3 class="text-center">Subscribe for more free stuff</h3>
    <p>Enter your name and email</p>
    <form class="form-inline" method="POST" action="{{url('subscribe_first')}}">	

    			 @csrf

            <label for="name" class="mr-sm-2">Name:</label>
            <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="name">

            <label for="email" class="mr-sm-2">Email address:</label>
            <input type="email" name="email" class="form-control mb-2 mr-sm-2" id="email">
            
            
            <button type="submit" class="btn btn-outline-success mb-2">Submit</button>
    </form>
    @if ($flash = session('successfirst'))
                     <div class="alert alert-success">
                       {{ $flash }}
                     </div>
                  @endif

      @include ('forms.errors_first')
</div>

