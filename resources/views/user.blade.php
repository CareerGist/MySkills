@extends('layouts.master')
@section('clrm', 'show-sidebar sidebar-l2')
@section('title', 'User Profile Page')

@section('navb')
<ul class="nav navbar-nav  navbar-right ">

                <!-- User -->
                 @if (Auth::guest())
                        <li><a href="login">Mentor</a></li>
                        <li><a href="register">Message</a></li>
                        <li><a href="register">Setting</a></li>
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
@section('navh', '<a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>')
<div class="sidebar right sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu">
      <div data-scrollable>
        <h4 class="category"><i class="fa fa-fw fa-folder-open"></i> Profile Pages</h4>
        <div class="sidebar-block">
          <ul class="list-group list-group-menu">
            <li class="list-group-item active"><a href="index.html"><span class="badge pull-right"> </span> Skills Feed </a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> Mentors Feed</a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> People with similar Skills</a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> Jobs relating to your skills</a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> Ask a question</a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> Upload CV</a></li>
            <li class="list-group-item"><a href="index.html"><span class="badge pull-right"> </span> Followers</a></li>
          </ul>
        </div>

        <!-- <h4 class="category"><i class="fa fa-fw fa-eye"></i> View</h4>
        <div class="sidebar-block">
          <div class="form-group">
            <select class="selectpicker">
              <option>List</option>
              <option>Grid</option>
            </select>
          </div>
        </div>

        <h4 class="category"><i class="fa fa-fw fa-dollar"></i> Price</h4>
        <div class="sidebar-block">
          <div class="form-group input-group">
            <div class="row margin-none">
              <div class="col-xs-6 padding-none">
                <input class="form-control" type="text" placeholder="Min .." />
              </div>
              <div class="col-xs-6 padding-none">
                <input class="form-control" type="text" placeholder="Max .." />
              </div>
            </div>
            <div class="input-group-btn">
              <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div> -->
      </div>
    </div>

<!-- content push wrapper where the skills will be displayed-->
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="container-fluid">

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  
                  <div class="media-left">
                    <a href="lesson.html">
                      <img src="images/people/110/guy-1.jpg" alt="people" class="media-object" />
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">Ademola Emmanuel</a></h3>

                    <button class="btn btn-primary"><i class="icon-user-1"></i> Edit Profile</button>
                    
                  </div>

                </div>
              </div>
            </div>
           <br>
            <div class="page-header">
              <h1 class="h3 pull-left margin-none">Skills</h1>
              <div class="pull-right">
                <div class="btn-group">
                  <!--<a class="btn bg-gray-dark" href="library.html"><i class="fa fa-list"></i></a>
                  <a class="btn btn-default" href="library-grid.html"><i class="fa fa-th"></i></a> -->
                </div>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  <div class="media-left">
                    <a href="lesson.html">
                      <span class="media-object icon-block bg-default"><i class="fa fa-github"></i></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">Github Webhooks for Beginners</a></h3>

                    <p class="small text-muted">
                      <i class="fa fa-clock-o fa-fw"></i> 4 hrs
                      <i class="fa fa-user fa-fw"></i> Adrian Demian
                      <i class="fa fa-calendar fa-fw"></i> 21/10/14
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque beatae, commodi consequatur cumque delectus dicta dolore dolorem et eum impedit in iure laborum minima minus modi mollitia neque nesciunt nostrum quae quod ratione
                      repudiandae rerum saepe sapiente tenetur veritatis voluptatibus. Dolorem eligendi et laudantium omnis pariatur possimus.</p>
                    <span class="label bg-gray-dark">View</span>
                    <span class="label label-default">Share</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  <div class="media-left">
                    <a href="lesson.html">
                      <span class="media-object icon-block bg-primary"><i class="fa fa-css3"></i></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">CSS Processing with LESS</a>
                      <small class="text-muted"><i class="fa fa-clock-o fa-fw"></i> 4 hrs</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque dolores eligendi excepturi expedita hic in inventore ipsum laborum natus nihil officia, officiis placeat quam recusandae sequi sit unde voluptatem voluptatum.
                      Aliquid at consequuntur cupiditate dolores eius, eveniet expedita id impedit incidunt libero magni officia officiis perspiciatis possimus quo.</p>
                    <span class="label bg-gray-dark">View</span>
                    <span class="label label-default">Share</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  <div class="media-left">
                    <a href="lesson.html">
                      <span class="media-object icon-block bg-lightred"><i class="fa fa-windows"></i></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">Portable Environments with Vagrant</a>
                      <small class="text-muted"><i class="fa fa-clock-o fa-fw"></i> 2 hrs</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque dolores eligendi excepturi expedita hic in inventore ipsum laborum natus nihil officia, officiis placeat quam recusandae sequi sit unde voluptatem voluptatum.
                      Aliquid at consequuntur cupiditate dolores eius, eveniet expedita id impedit incidunt libero magni officia officiis perspiciatis possimus quo.</p>
                    <span class="label bg-gray-dark">View</span>
                    <span class="label label-default">Share</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  <div class="media-left">
                    <a href="lesson.html">
                      <span class="media-object icon-block bg-brown"><i class="fa fa-wordpress"></i></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">WordPress Theme Development</a></h3>

                    <p class="small text-muted">
                      <i class="fa fa-clock-o fa-fw"></i> 4 hrs
                      <i class="fa fa-user fa-fw"></i> Adrian Demian
                      <i class="fa fa-calendar fa-fw"></i> 21/10/14
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque beatae, commodi consequatur cumque delectus dicta dolore dolorem et eum impedit in iure laborum minima minus modi mollitia neque nesciunt nostrum quae quod ratione
                      repudiandae rerum saepe sapiente tenetur veritatis voluptatibus. Dolorem eligendi et laudantium omnis pariatur possimus.</p>
                    <span class="label bg-gray-dark">View</span>
                    <span class="label label-default">Share</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media media-clearfix-xs-min">
                  <div class="media-left">
                    <a href="lesson.html">
                      <span class="media-object icon-block bg-purple"><i class="fa fa-jsfiddle"></i></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading h4"><a href="lesson.html">Writing Modular JavaScript</a></h3>

                    <p class="small text-muted">
                      <i class="fa fa-clock-o fa-fw"></i> 4 hrs
                      <i class="fa fa-user fa-fw"></i> Adrian Demian
                      <i class="fa fa-calendar fa-fw"></i> 21/10/14
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque beatae, commodi consequatur cumque delectus dicta dolore dolorem et eum impedit in iure laborum minima minus modi mollitia neque nesciunt nostrum quae quod ratione
                      repudiandae rerum saepe sapiente tenetur veritatis voluptatibus. Dolorem eligendi et laudantium omnis pariatur possimus.</p>
                    <span class="label bg-gray-dark">View</span>
                    <span class="label label-default">Share</span>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div> <!-- end of the skills section -->
 @endsection