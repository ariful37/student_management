<div class="card-body">
    <div class="" id="marks-entry">
     <table id="example1" class="table table-bordered table-striped">
       <thead>
       <tr>

         <th>Student Roll</th>
         <th>Class</th>
         <th>Student Name</th>
         <th>Phone Number</th>

         <th class="text-center">Add Marks</th>
       </tr>
       </thead>
       <tbody id="marks-entry-tr">
        @foreach ($allData as $item)
             <tr>

                    <input type="hidden" name="StudentId[]" value="{{ $item->id }}">
                    <input type="hidden" name="RollNo[]" value="{{ $item->RollNo }}">

                <td>{{ $item->RollNo }}</td>
                <td>{{ $item->ClassId }}</td>
                <td>{{ $item->StudentName }}</td>
                <td>{{ $item->SmsNumber }}</td>
                <td>
                    <input placeholder="Subjective" id="Subjective" name="Subjective[]" type="text">
                    <input placeholder="Objective" id="Objective" name="Objective[]" type="text">
                </td>
            </tr>
        @endforeach

       </tfoot>
     </table>
     <div class="mt-3">
       <button type="submit" class="btn btn-success">Add Marks</button>
    </div>

    </div>
   </div>

