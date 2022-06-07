function validateForm(){
    if(document.forms["story"]["title"].value == "" ||
        document.forms["story"]["alias"].value == "" ||
        document.forms["story"]["text"].value == "" ||
        document.forms["story"]["tags"].value == ""){
        alert("Fill in all fields!");
        return false;
    }
}