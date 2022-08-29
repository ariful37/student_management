<div class="card-body">
    <div class="" id="marks-entry">
     <table id="example1" class="table table-bordered table-striped">
       <thead>
       <tr>


         <th>Student Roll</th>
         <th>Class</th>
         <th>Student Name</th>



         <th class="text-center">Edit Marks</th>
       </tr>
       </thead>
       <tbody id="marks-entry-tr">
        @foreach ($allData as $item)
             <tr>

               <input type="hidden" name="StudentId[]" value="{{ $item->id }}">

                <td>{{ ($item->student)? $item->student->StudentName: '' }}</td>
                <td>{{ $item->class->class_name}}</td>
                <td>{{ ($item->student)? $item->student->RollNo : ''}}</td>

                <td>
                    <input placeholder="Subjective" id="Subjective" name="Subjective[]" value="{{ $item->Subjective}}" type="text">
                    <input placeholder="Objective" id="Objective" name="Objective[]" value="{{ $item->Objective }}" type="text">
                </td>
            </tr>
        @endforeach

       </tfoot>
     </table>
     <div class="mt-3">
       <button type="submit" class="btn btn-success">Edit Marks</button>
    </div>

    </div>
   </div>

