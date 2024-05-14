<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with 8 Resizable Text Fields</title>
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-row .form-group {
            flex: 1;
            margin-right: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        textarea {
            resize: both;
            overflow: auto;
        }
        #textfield1 {
            resize: none;
        }
    </style>
</head>
<body>
    <form>
        <div class="form-row">
            <div class="form-group">
                <label for="textfield1">Text Field 1</label>
                <input type="text" id="textfield1" name="textfield1">
            </div>
            <div class="form-group">
                <label for="combobox2">Combobox 2</label>
                <select id="combobox2" name="combobox2">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="textfield3">Text Field 3</label>
            <textarea id="textfield3" name="textfield3" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="textfield4">Text Field 4</label>
            <textarea id="textfield4" name="textfield4" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="textfield5">Text Field 5</label>
            <textarea id="textfield5" name="textfield5" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="textfield6">Text Field 6</label>
            <textarea id="textfield6" name="textfield6" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="textfield7">Text Field 7</label>
            <textarea id="textfield7" name="textfield7" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="textfield8">Text Field 8</label>
            <textarea id="textfield8" name="textfield8" rows="3"></textarea>
        </div>
    </form>
</body>
</html>
