function temizle()
{
    document.getElementById("myForm").reset();
}

function validateForm()
{
    var x = document.forms["myForm"]["ad"].value;    
    if (x == null || x == "") 
    {
        alert("Adınızı girin.");
        return false;
    }
    var y = document.forms["myForm"]["soyad"].value;
    if(y == null || y == "")
    {
        alert("Soyadınızı girin.");
        return false;
    }
    var k = document.forms["myForm"]["message"].value;
    if(k == null || k == "")
    {
        alert("Mesajınızı girin.")
        return false;
    }
    var c = document.forms["myForm"]["e-mail"].value;
    if(validateEmail(c) == false)
    {
        alert("E-mailinizi kontrol ediniz.")
        return false;
    }
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
