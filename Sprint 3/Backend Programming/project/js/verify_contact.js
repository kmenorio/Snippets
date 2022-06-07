function validateForm(){
    if(document.forms["contact"]["title"].value == "" ||
        document.forms["contact"]["email"].value == "" ||
        document.forms["contact"]["concern"].value == ""){
        alert("Fill in all fields!");
        return false;
    }
}