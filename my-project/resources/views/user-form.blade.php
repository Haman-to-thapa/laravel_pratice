<div>
    <h2>Add New User</h2>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div>
    {{$error}}
    </div>
    @endforeach
    @endif

    <form action="/adduser" method="post">
        @csrf

        <div>
            <h4>User Skills</h4>

            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>

            <input type="checkbox" name="skill[]" value="NODE" id="node">
            <label for="node">Node</label>

            <input type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">Java</label>
        </div>

        <div>
            <h5>Gender</h5>

            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h5>City</h5>

            <select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
            </select>
        </div>

        <div>
            <h5>Age</h5>

            <input type="range" name="age" min="18" max="100">
        </div>

        <br>

        <button type="submit">Add New User</button>
    </form>
</div>