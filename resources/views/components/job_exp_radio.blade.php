<form action="/submit-form" method="POST">
    @csrf

    <input type="radio" name="option" value="yes" onclick="showInputField()"> Yes
    <input type="radio" name="option" value="no" onclick="hideInputField()"> No

    <!-- Initially hidden input field -->
    <div id="inputFieldContainer" style="display: none;">
        <input type="text" name="additional_field" id="additionalField" placeholder="Additional Field">
    </div>

    <button type="submit">Submit</button>
</form>

<script>
    function showInputField() {
        document.getElementById('inputFieldContainer').style.display = 'block';
    }

    function hideInputField() {
        document.getElementById('inputFieldContainer').style.display = 'none';
    }
</script>
