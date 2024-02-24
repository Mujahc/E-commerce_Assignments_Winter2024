<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?= $name ?> view</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div id='container'>
        <form method='post' action="/Person/complete_registration">
            <div class="form-group">
                <label for="first_name">First name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First" value="<?= $data->first_name ?>">
            </div>
            <div class="form-group">
                <label for="last_name">Last name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last" value="<?= $data->last_name ?>">
            </div>
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" name="email_address" id="email_address" class="form-control" placeholder="email.com" value="<?= $data->email_address ?>">
            </div>
            <div class="form-group">
                <label>Include me on the mailing list</label>
                <input type="checkbox" name="publications[]" value="mailing_list"> 
            </div>
            <div class="form-group"> 
                <label>Send me the weekly flyer</label>
                <input type="checkbox" name="publications[]" value="weekly_flyer">
            </div>
            <!-- <div class="form-group">
                Do you want to be included on our mailing list?
                <label for="yes_radioBtn">Yes</label>
                <input type="radio" name="mailing_list" value="1" id="yes_radioBtn">
                <label for="no_radioBtn">No</label>
                <input type="radio" name="mailing_list" value="0" id="no_radioBtn">
            </div> -->
            <div class="form-group">
                <button id="submit_btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

