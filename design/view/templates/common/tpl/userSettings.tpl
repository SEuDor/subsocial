<div class="formBlock">
    <form action="/user/{$pageData.curUser.id}/?act=mod&s=1" method="post" enctype="multipart/form-data">
        <label for="nameField">Name</label>
        <input id="nameField" type="text" width="20" name="name" value="{$user->getName()}" required="required" />

        <label for="surnameField">Surname</label>
        <input id="surnameField" type="text" width="20" name="surname" value="{$user->getSurname()}" required="required" />

        <div>
            <label for="bDayField">Day</label>
            <input type="text" name="bDay" id="bDayField"/>

            <label for="bMonthField">Month</label>
            <input type="text" name="bMonth" id="bMonthField"/>

            <label for="bYearField">Year</label>
            <input type="text" name="bYear" id="bYearField"/>
        </div>

        <label for="genderList">Gender</label>
        <select id="genderList" name="gender">
            <option disabled>Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>

        <label for="nationalityField">Nationality</label>
        <input id="nationalityField" type="text" width="20" name="nationality" value="{$user->getNationality()}" />

        <label for="telField">Phone Number</label>
        <input id="telField" type="text" width="20" name="tel" value="{$user->getTelnum()}" />

        <label for="skypeField">Skype</label>
        <input id="skypeField" type="text" width="20" name="skype" value="{$user->getSkype()}" />

        <label for="selfinfoTA">Personal Info</label>
        <textarea id="selfinfoTA" name="selfInfo">{$user->getSelfInfo()}</textarea>

        <label for="fileUpload">Avatar Image</label>
        <input type="file" name="fileUpload" id="fileUpload" />

        <button type="submit" role="button">Change</button>
        {*<input type="submit" value="Upload Image" name="submit">*}
    </form>
</div>