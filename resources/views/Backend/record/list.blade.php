<x-backend>
<div class="col-md-12">
<div class="main-card mb-3 card">
     @if(session('successMsg')!=NULL)
                        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> <strong>Well done!</strong></h4>
  <p>{{session('successMsg')}}</p>
  <hr>
  
</div>
@endif
    <div class="card-header">Active Users

        <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
               
                <a href="{{route('backside.record.create')}}" class="btn btn-success">
                    <i class="pe-7s-plus pe-2x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    
                    <th class="text-center">Student</th>
                    <th class="text-center">Classroom</th>
                    <th class="text-center">Academic Year</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                                        $i=1;
                                        @endphp
                                        @foreach($records as $record)
                                        @php
                                        $name=$record->student->user->name;
                                        // $class=$record->classroom1->name;
                                        $class=$record->class_id;
                                       
                                        $year=$record->academic->year;
                                        $id=$record->id;

                                        @endphp
                <tr>
                    <td class="text-center text-muted">{{$i++}}</td>
                    <td class="text-center">{{$name}}</td>
                    <td class="text-center">{{$class}}</td>
                    <td class="text-center">{{$year}}</td>
                   
                    <td class="text-center">
                        
                     
                    <a href="" class="btn btn-outline-warning">
                        <i class="pe-7s-config pe-2x"></i>
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class="pe-7s-close pe-2x"></i>
                    </a>

                    
                </td>
            </tr>
          @endforeach
            </tbody>
        </table>
    </div>
    
</div>
</div>
</div>
</x-backend>