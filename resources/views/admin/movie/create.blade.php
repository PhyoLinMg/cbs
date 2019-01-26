@extends("layouts.adminmaster")

@section("title")
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css" />

<title>Admin Panel</title>

@endsection

@section("content")

@include('admin.header')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><b><i>Movie Entry form</i></b></h4>
            <form id='my' method="post" action = "{{ route('movie.store') }}" enctype='multipart/form-data'>
              @csrf
              <div class="form-group">
                <label for="name">Movie Name</label>
                @if($errors->has("name"))
                <input type="text" class="form-control is-invalid" name="name" id="name"  placeholder="Enter the movie name" value="{{ old('name')}} ">
                <div class="invalid-feedback">
                  {{ $errors->first("name") }}
                </div>
                @else
                <input type="text" class="form-control" name="name" placeholder="Enter the movie name" value="{{ old('name')}} ">
                @endif
              </div>
              <div class="form-group">
                <label for="room">Room</label>
               <select style="border: solid black 0.1px;" class="form-control" name="room" id="types1">
                      @foreach($rooms as $room)
                      <option value="{{$room->id}}">{{$room->name}}</option>
                      @endforeach
                </select>

              </div>
              <div class="form-group">
                    <label class="text-white" for="time">Start Time</label>
                    <div class="input-group d-flex align-items-center" id="time">
                      <div class="pr-2">
                        <select style="border: solid black 0.1px;" class="form-control" name="hour" id="" >
                          @for($i=1;$i<=12;$i++)
                          @if($i<10)
                          <option value="0{{$i}}">0{{$i}}</option>

                          {{-- 0 ka br lo htae htr tr ll? --}}

                          @else
                          <option value="{{$i}}">{{$i}}</option>
                          @endif
                          @endfor
                        </select>
                      </div>

                      <div class="pr-3"><span class="text-black">Hour </span></div>
                      
                      <div class="pr-2">
                        <select style="border: solid black 0.1px;" class="form-control" name="minute" id="" >
                          @for($i=0;$i<=59;$i++)
                          @if($i<10)
                          <option value="0{{$i}}">0{{$i}}</option>
                          @else
                          <option value="{{$i}}">{{$i}}</option>
                          @endif
                          @endfor
                        </select>

                      </div>

                      <div class="pr-3"><span class="text-black">Minute </span></div>

                      
                      
                      <div class="pr-2">
                        <select  style="border: solid black 0.1px;" class="form-control" name="amorpm" id=""  >
                          <option value="am">AM</option>
                          <option value="pm">PM</option>
                        </select>
                      </div>
                      
                    </div>
                  </div>


              <div class="form-group">
                 <input id="avatar" type="file" class="form-control" name="avatar">
              </div>

          <div class="form-group">
            <label for="startdate">Start Date</label>
            <input type="date" id="startdate" name="startdate">
          </div>
          <div class="form-group">
            <label for="enddate">End Date</label>
            <input type="date" id="enddate" name="enddate">
          </div>

            <div class="form-group">
              <label for="count">Movie Types</label>
              <select id="types" class="simple-select2 w-100" name="types[]" multiple="multiple">

                @foreach($movietype as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
            <div>
              <button type="submit" id='submit-all'class="btn btn-success mr-2">Submit</button>
            </div>


          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4 ">
      <div id="errors">

      </div>
    </div>
  </div>
</div>
@include('admin.footer')
<!-- page-body-wrapper ends -->
</div>

@endsection

@section("script")

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script src="{{ asset('js/dropzone1.js') }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script> 

  // $.ajaxSetup({
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });
  // $.ajax().done(function(response){
  //   //check if response has errors object
  //   if(response.errors){
  //     toastr.error(response.errors, 'Inconceivable!')
      

  //   }
  // });
  $(document).ready(function() {
    $('#types').select2();
  });

  
  
</script>

@endsection