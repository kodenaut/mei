     @extends('admin.layout')

     @section('content')
     <!-- MAIN CONTENT-->
     <div class="row">

          <!-- Mission -->
          @foreach($missions as $mission)
          <div class="col-sm-4">
               <div class="card card-body" style="border-radius: 25px;">
                    <i class="fas fa-graduation-cap fa-2x text-center"></i>
                    <hr>
                    <p class="content">{{ $mission->content }}</p>
                    <hr>
                    <div class="caption">
                    <button class="btn btn-info btn-sm" style="width: 23px;">
                         <i class="fas fa-info"></i>
                    </button>
                    <a href="{{route('edit-mission',$mission->id)}}" class="btn btn-info btn-sm float-right" style="width: 29px;">
                         <i class="fas fa-edit"></i>
                    </a>
                    </div>
               </div>
          </div>
          @endforeach

          @foreach($visions as $vision)
          <div class="col-sm-4">
               <div class="card card-body" style="border-radius: 25px;">
                    <i class="fas fa-binoculars fa-2x text-center"></i>
                    <hr>
                    <p class="content">{{ $vision->content }}</p>
                    <hr>
                    <div class="caption">
                         <a href="" class="btn btn-info btn-sm" style="width: 23px;">
                              <i class="fas fa-info"></i>
                         </a>
                         <a href="{{route('edit-vision', $vision->id)}}" class="btn btn-info btn-sm float-right" style="width: 29px;">
                              <i class="fas fa-edit"></i>
                         </a>
                    </div>
               </div>
          </div>
          @endforeach

          @foreach($philosophies as $philosophy)
          <div class="col-sm-4">
               <div class="card card-body" style="border-radius: 25px;">
                    <i class="fas fa-globe fa-2x text-center"></i>
                    <hr>
                    <p class="content">{{ $philosophy->content }}</p>
                    <hr>
                    <div class="caption">
                         <a href="" class="btn btn-info btn-sm" style="width: 23px;">
                              <i class="fas fa-info"></i>
                         </a>
                         <a href="{{route('edit-philosophy', $philosophy->id)}}" class="btn btn-info btn-sm float-right" style="width: 29px;">
                              <i class="fas fa-edit"></i>
                         </a>
                    </div>
               </div>
          </div>
               @endforeach


     </div>
     @endsection
<!-- end document-->