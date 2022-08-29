<div class="card-body">
    <div class="" id="marks-entry">
     <table id="example1" class="table table-bordered table-striped">
       <thead>
       <tr>

         <th>Student ID</th>
         <th>Student Roll</th>
         <th>Student Name</th>
         <th>Total Mark</th>
       </tr>
       </thead>
       <tbody id="marks-entry-tr">
        @foreach ($allData as $item)
             <tr>

                <td>{{ $item->StudentId }}</td>
                <td>{{ $item->Student->RollNo }}</td>
                <td>{{ $item->Student->StudentName}}</td>
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

