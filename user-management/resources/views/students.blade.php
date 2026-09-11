<div>
    <!-- Well begun is half done. - Aristotle -->
    <h1>Student List</h1>
    {{-- {{print_r($data)}} --}}

    <table border>
    <tr>
<td>Name</td>
<td>Email</td>
<td>Batch</td>
    </tr>
@foreach($data as $student)
     <tr>
<td>{{$student->name}}</td>
<td>{{$student->email}}</td>
<td>{{$student->batch}}</td>
    </tr>
    @endforeach
    
    </table>
</div>
