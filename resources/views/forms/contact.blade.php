<!-- Contact -->

<div class="container">
    <section>
      <div class="page-header" id="contact">
          <h2>Contact Us.<small> Contact us for more.</small></h2>
        </div><!-- End Page Header -->

        <div class="row">
          <div class="col-lg-4">
            <p>Send us a message, or contact us from the address below</p>


            <address>
              <strong>Mobile-Wiz Pvt Ltd.</strong></br>
              111, Blvd. Magheru </br>
              Plot no. 45</br>
              Bucharest - 110017</br>
              P: +04 0215334123
            </address>
          </div>
          
      <div class="col-lg-8">
					<form class="form-horizontal" method="POST" action="{{url('contact')}}">	

                @csrf

                 @if ($flash = session('success'))
                     <div class="alert alert-success">
                       {{ $flash }}
                     </div>
                  @endif

            @include ('forms.errors')

                <div class="form-group">
                  <label for="user-name" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="user-name" name="name" placeholder="Enter you name">
                  </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-email" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="user-email" name="email" placeholder="Enter you Email Address">
                  </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-url" class="col-lg-2 control-label">Website</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="user-url" name="website" placeholder="If you have Any.">
                  </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <label for="user-message" class="col-lg-2 control-label">Message</label>
                  <div class="col-lg-10">
                    <textarea name="message" id="user-message" class="form-control" 
                    cols="20" rows="10" placeholder="Enter your Message"></textarea>
                  </div>
                </div><!-- End form group -->

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

             

               </form>
          </div>
        </div><!-- End the row -->

    </section>
  </div>


