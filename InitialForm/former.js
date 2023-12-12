const form = document.getElementById('jsonInput');
const block = document.getElementById('endInput')

form.addEventListener('submit', callbackFunction);

function callbackFunction(event) {
    event.preventDefault();
    const myFormData = new FormData(event.target);

    const formDataObj = {};
    myFormData.forEach((value, key) => (formDataObj[key] = value));
    console.log(formDataObj);
    endInput.innerText = JSON.stringify(formDataObj);
};

function randomPage() {
    websiteArray = ['../andytop10thing/tenbestthing.php', '../programrap/PageSix.php', '../colebottom10thing/PageTen.php', '../otherassignment/PageSeven.php', '../TableAlignment/PageTwo.php', '../humanpersonfanpage/theProf.php', 
                    '../formcursion/PageEight.php', '../FLASHBANG!!/PageThree.php', '../daKing/PageFour.php']
    arrayIndex = Math.floor(Math.random() * websiteArray.length);
    window.location.href=websiteArray[arrayIndex]
};

function validateForm() {
    let w = document.forms["validate"]["firstemail"].value;
    let x = document.forms["validate"]["otheremail"].value;
    let isGood = true;
    let alertString = "";

    let a = w.indexOf("@")
    if (a < 0) {
        alertString += "Email 1 needs an @\n"
        isGood = false;
    }
    let d = w.indexOf(".")
    if ((d < 0) || (d < a)) {
        alertString += "Email 1 needs a .\n"
        isGood = false;
    }

    a = x.indexOf("@")
    if (a < 0) {
        alertString += "Email 2 needs an @\n"
        isGood = false;
    }
    d = x.indexOf(".")
    if ((d < 0) || (d < a)) {
        alertString += "Email 2 needs a ."
        isGood = false;
    }

    if (isGood) {
        return true;
    }
    else {
        alert(alertString);
        return false;
    }
};

function checkFields() {
    let alertString="";
    let idField = document.getElementById("nameID");
    if (idField.value == "")
    {
        alertString += "Please input a name.\n";
    }
    let plane = document.getElementById("firstemail");
    if (plane.value == "")
    {
        alertString += "Please input a plane of existence.\n";
    }
    let grade = document.getElementById("gradeID");
    if (grade.value == "Select a Grade")
    {
        alertString += "Please select a grade.\n"
    }
    
    if (alertString != "")
    {
        alert(alertString);
    }
}