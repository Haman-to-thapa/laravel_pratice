<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
    {{-- <h1>Users List</h1>

    {{
        print_r($users)
    }}

    <table border="1">
    <tr/>
    <td>Name</td>
    <td>Email</td>
    <td>Phone No</>
    </tr>
    @foreach($users as $user)
    <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
    </tr>
    @endforeach
    </table> --}}

    <h1>User Form</h1>

<form action="/newUser" method="post">

{{-- <input type="hidden" name="_method" value="PUT"/> --}}

<input type="hidden" name="_method" value="Delete"/>
@csrf
    <input
        type="text"
        name="user"
        placeholder="Enter name"
    />

    <br /><br />

    <input
        type="text"
        name="password"
        placeholder="Enter password"
    />

    <br /><br />

    <button type="submit">Submit</button>
</form>
</div>
