
/*********** Function Check for Integer *************************/
//alert('calling');
function CheckForIntegers(i)
{
    if(i.value.length>0)
    {
        i.value = i.value.replace(/[^\d]+/g, '');
    }
}


/***************** Function Check For Float *****************************/

function CheckForFloat(i)
{
    if(i.value.length>0)
    {
        i.value = i.value.replace(/[^\d\.]+/g, '');
    }
}
/******************** Function For Check Email Validation**************************/

function validateEmail() {
    //alert('calling');
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    // var address = document.forms[form_id].elements[txtemail_id].value;
    var address = document.getElementById('email').value;
    if(reg.test(address) == false) {
        alert('Invalid Email Address');
        return false;
    }
}


function validateEmail1() {
    //alert('calling');
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    // var address = document.forms[form_id].elements[txtemail_id].value;
    var address = document.getElementById('executiveemail').value;
    if(reg.test(address) == false) {
        alert('Invalid Email Address');
        return false;
    }
}


/************************** For Odd Even Row**********************/

function alternate(id){
    if(document.getElementsByTagName){
        var table = document.getElementById(id);
        var rows = table.getElementsByTagName("tr");
        for(i = 2; i < rows.length; i++){
            //manipulate rows
            if(i % 2 == 0){
                rows[i].className = "even";
            }else{
                rows[i].className = "odd";
            }
        }
    }
}


/*********************** validate for empty  text or not selected *************/

