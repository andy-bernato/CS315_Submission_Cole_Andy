<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="form.css" media="only screen and (min-width:770px)">
<link rel="stylesheet" href="formsmall.css" media="only screen and (max-width:769px)">

<div id="topnav">
    <a class="active" href="PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../login/login.php">Login</a>
    <a href="../TableOfContents/TableOfContents.php">Table of Contents</a>
</div>

<body id="formbody">
    <form onsubmit="return validateForm()" method="post" id="jsonInput" name = "validate">
        <fieldset>
            <legend> Totally Secure user data input </legend>
            <p>
                <label>Name:</label>
                <input type="text" id="nameID" name="Name" />
            </p>
            <p>
                <label for="email">Enter your email:</label>
                <input id="firstemail" name="Email">
            </p>
            <p>
                <label for="email">Enter someone else's email:</label>
                <input id="otheremail" name="Email Two">
            </p>
            <p>
                <label>How joitled are you right now:</label>
                non-joitled (Sad)
                <input type="range" id="joitledness" min="0" max="10000" step="10" name="Is you joitled?"/>
                Joitled! (happy)
            </p>
            <p>
                <label>Wat grade are you going to give us:</label>
                <select name="Grade" id ="gradeID">
                    <option>Select a Grade</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                </select>
            </p>
            <input type="submit"/>
        </fieldset>
        Your data will appear here
    </form>
    <button type="button" id="randomPage" onclick=randomPage()>
        Go to a WACKY random website
    </button>
    <script src="form.js"></script>
</body>