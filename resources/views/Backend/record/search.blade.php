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
          <div class="card-header">Record List

            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    
                   
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
                        <th class="text-center">Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($attendances as $attendance)
                    @php 
                    $sname=$attendance->student->user->name;
                    $cname=$attendance->classroom->name;
                    @endphp
                    <tr>
                        <td class="text-center text-muted">{{$i++}}</td>                        
                        {{-- @foreach($students as $student)
                        @php
                        $studentid=$student->id;
                        @endphp
                        @if($studentid == $sid) --}}
                        <td class="text-center">{{$sname}}</td>
                        <td class="text-center">{{$cname}}</td>
                   {{--      @endif
                        @endforeach --}}
                        <td class="text-center">{{$attendance->date}}</td>
                        <td class="text-center">{{$attendance->status}}</td>
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