@extends('layouts.master')

@section('title', 'Home Page')

@section('navb')
       <ul class="nav navbar-nav  navbar-right ">

                <!-- User -->
                @if (Auth::guest())
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Create Account</a></li>
                @else

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                        <img src="{{ Auth::user()->getAvatarUrl() }}" width="25" height="25" /> {{ Auth::user()->fullname }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('account.dashboard') }}"><i class="fa fa-btn fa-user"></i> My Account</a></li>
                        <li><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
                @endif
       </ul>
        </div>
        <!-- /.navbar-collapse -->

      </div>
    </div>
@endsection

@section('content')

  <!-- Wrapper required for sidebar transitions -->
  

    <!-- Fixed navbar -->
    

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    
    

    <!-- <div class="chat-window-container"></div> -->

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, ast-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="cover overlay cover-image-full home">
            <img src="images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="" />

            <div class="overlay overlay-bg-black">
              <div class="container">
                <div class="page-section">
                  <h1 class="margin-none text-display-1 text-overlay">Library of Courses for Web &amp; Mobile</h1>

                  <p class="text-subhead text-overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur consequatur distinctio earum ipsam. <span class="hidden-xs hidden-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus hic
                    quisquam reprehenderit vero voluptatum? Accusantium in nesciunt perspiciatis repellendus sed! Aliquid
                    architecto ducimus optio reprehenderit.</span></p>

                  <br/>
                  <a class="btn bg-blue btn-lg" href="">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="text-center">
              <h2>Features &amp; Highlights</h2>

              <p class="lead text-muted">Learn about all of the features we offer.</p>
              <br/>
            </div>
            <div class="row" data-toggle="gridalicious">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-film fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Watch Courses Offline</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-life-bouy fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Premium Support</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-user fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Learn from Top Tutors</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-code fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Lesson Source Files</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-print fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">Printed Graduation Diploma</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media">
                    <i class="fa fa-tasks fa-2x fa-fw pull-left text-muted"></i>

                    <div class="media-body">
                      <p class="lead margin-none">New Lessons Every Day</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="text-center">
              <h2>Feedback</h2>

              <p class="lead text-muted">How others use E-learning to improve their skills</p>
              <br/>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="media">
                  <img src="images/people/50/guy-6.jpg" alt="People" class="pull-left img-circle media-object" />

                  <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quo!</p>
                    <p>
                      <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="media">
                  <img src="images/people/50/guy-2.jpg" alt="People" class="pull-left img-circle media-object" />

                  <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quo!</p>
                    <p>
                      <strong>Jonathan S. <span class="text-muted">@ Company Inc.</span></strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="media">
                  <img src="images/people/50/guy-9.jpg" alt="People" class="pull-left img-circle media-object" />

                  <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quo!</p>
                    <p>
                      <strong>Bogdan L. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <br/>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->
    @endsection
    <!-- Footer -->
    
