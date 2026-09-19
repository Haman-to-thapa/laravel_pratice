<div>
    <h1>Add New User</h1>

<span class="success-message">
  {{
        session('message');
    }}
</span>

{{-- {{session()->reflash()}} --}}

  
    <form action="/add" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Enter your full Name">
        <br><br>

        <input type="password" name="password" placeholder="Enter your password">
        <br><br>

        <input type="text" name="phone" placeholder="Enter your phone no">
        <br><br>

        <button type="submit">Add</button>
    </form>
</div>

<style>
.success-message{
    background-color:lightgreen;
    border-radius:2px;
    padding:2px;
    margin-bottom:10px;
    display:inline-blcok;

}
</style>