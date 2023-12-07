<body id="formbody">
    <form  method="post" id="jsonInput" name = "validate" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Create New User </legend>
            <p>
                <label>Name:</label>
                <input type="text" id="username" name="Username" />
            </p>
            <p>
                <label for="email">Enter your email:</label>
                <input id="email" name="Email">
            </p>
            <p>
                <label for="text">Create a Password:</label>
                <input id="pass" name="Pass">
            </p>

            <input type="submit"/>
        </fieldset>
    </form>