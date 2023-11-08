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