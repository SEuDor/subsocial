<div class="formBlock">
    <form action="/register/" method="post">
        <input type="hidden" name="perform" value="1" />

        <label for="nameField">Name</label>
        <input id="nameField" type="text" width="20" name="name" required="required" />

        <label for="surnameField">Surname</label>
        <input id="surnameField" type="text" width="20" name="surname" required="required" />

        <label for="genderList">Gender</label>
        <select id="genderList" name="gender" required="required">
            <option disabled>Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>

        <label for="skypeField">Skype</label>
        <input id="skypeField" type="text" name="skype" width="20" />

        <label for="loginField">Login</label>
        <input id="loginField" type="text" width="20" name="login" required="required" />

        <label for="pasField">Password</label>
        <input id="pasField" type="password" width="20" name="pas" required="required" />

        <button type="submit" role="button">Register</button>
        {*<input type="submit" value="Submit" />*}
    </form>
</div>