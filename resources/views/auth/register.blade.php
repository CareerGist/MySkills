@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Sign Up</h3>
        </div>

         <form role="form" method="POST" action="{{ route('auth.register') }}" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" autofocus="" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>

            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" id="email" class="form-control">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" name="password" id="password" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
              <label for="category" class="col-sm-2 control-label">Category</label>
              <div class="col-sm-8">
              <select class="form-control" id="category" name="category">
              <option value="">Please select a category</option>
                @foreach($category as $item)
                  <option value="{{$item->category}}">{{$item->category}}</option>
                @endforeach
              </select>
              @if ($errors->has('Category'))
                        <span class="help-block">{{ $errors->first('Category') }}</span>
                    @endif
              </div>
            </div>


               <div class="form-group{{ $errors->has('skill') ? ' has-error' : '' }}">
              <label for="skill" class="col-sm-2 control-label">Skill</label>
              <div class="col-sm-8">
              <select name="skill" id="skill" class="form-control">    
               <option>Please choose a category first</option>
              </select>
               @if ($errors->has('skill'))
                        <span class="help-block">{{ $errors->first('skill') }}</span>
                    @endif 
              </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Signup</button>
                </div>
            </div>
        </form>
    </div>


     <script type="text/javascript">
       $(document).ready(function($){
                     $('#category').change(function(){
                       $.get("{{ url('/dropdown')}}", 
                       { option: $(this).val() },
                             function(data) {
                                $('#skill').empty(); 
                                    $.each(data, function(key, element) {
                      $('#skill').append("<option value='" + element.sid +"'>" + element.skill + "</option>");
                    });
                });
           });
            
         });
            
    </script>
@stop
