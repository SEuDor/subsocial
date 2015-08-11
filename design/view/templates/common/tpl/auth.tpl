<div class="formBlock">
    <form action="/auth/" method="post">
        <input type="hidden" name="check" value="1" />
        <label for="loginField">Login</label>
        <input id="loginField" type="text" width="30" name="login" />



        <label for="pasField">Password</label>
        <input id="pasField" type="password" width="30" name="pas" />


        <button type="submit" role="button">Submit</button>
        {*<input type="submit" value="Submit" />*}
        {*<button type="submit" role="button">Submit</button>*}
    </form>
    <a href="/register/">Registration</a>
</div>