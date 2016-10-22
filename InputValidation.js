/**
 * Created by john on 10/22/16.
 */
function formatPhoneStr(o)
{
    var strPhone = o.value;

    if( (strPhone != null) && (strPhone.length > 0) && (strPhone.indexOf('-') == -1))
    {
        if (strPhone.length == 10)
        {
            strPhone = strPhone.substr(0,3) + '-' + strPhone.substr(3,3) + '-' + strPhone.substr(6,4);
        }
        else if (strPhone.length > 10)
        {
            strPhone = '(' + strPhone.substr(0,3) + ') ' + strPhone.substr(3,3) + '-' + strPhone.substr(6,4) + ' x' + strPhone.substr(10);
        }
        o.value = strPhone;
    }
}

function phoneFormat(phone) {
    var num = phone.value;
    if (/^\d{10}$/.test(num)) {
        document.getElementById("PhoneTip").innerHTML = "";
    }
    else {
        document.getElementById("PhoneTip").innerHTML = "Enter a full number, with area code and without spaces or dashes";
    }

}