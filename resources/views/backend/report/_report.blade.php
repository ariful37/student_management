<div class="card-body">
    <div class="" id="marks-entry">
     <table id="example1" class="table table-bordered table-striped">
       <thead>
       <tr>

         <th>Student Name</th>
         <th>Student Roll</th>
         <th>Student Phone</th>
         <th>Total Mark</th>
         <th>Action</th>
       </tr>
       </thead>
       <tbody id="marks-entry-tr">
        @foreach ($allData as $item)
             <tr>
                <td>{{ $item->student->StudentName}}</td>
                <td>{{ $item->student->RollNo}}</td>
                <td>{{ $item->student->SmsNumber}}</td>
                {{-- <td>{{ $item->student->SmsNumber}}</td> --}}
                {{-- <td>{{ $item->student? $item->student->RollNo:''}}</td>
                <td>{{ $item->student? $item->student->SmsNumber:''}}</td> --}}
                <td>{{ $item->Subjective + $item->Objective}} Mark</td>
                <td>
                    <a href="#" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-print" aria-hidden="true"></i></a>
                </td>

            </tr>
        @endforeach

       </tfoot>
     </table>
     {{-- <div class="mt-3">
       <button type="submit" class="btn btn-success">Add Marks</button>
    </div> --}}

    </div>
   </div>

