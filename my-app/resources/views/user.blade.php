```html
<div>
    <h1>User Login</h1>

    <div>
        <form action="/user" method="POST">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Enter Your Full Name"
            />

            <br />
            <br />

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
            />

            <br />
            <br />

            <button type="submit">Login</button>
        </form>
    </div>
</div>
```
