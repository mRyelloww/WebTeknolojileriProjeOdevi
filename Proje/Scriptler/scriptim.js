function temizle()
{
    document.getElementById("iletisimForm").reset();
}

function iletisimDogrulama()
{
    var x = document.forms["iletisimForm"]["ad"].value;    
    if (x == null || x == "") 
    {
        alert("Adınızı girin.");
        return false;
    }
    var y = document.forms["iletisimForm"]["soyad"].value;
    if(y == null || y == "")
    {
        alert("Soyadınızı girin.");
        return false;
    }
    var k = document.forms["iletisimForm"]["message"].value;
    if(k == null || k == "")
    {
        alert("Mesajınızı girin.")
        return false;
    }
    var c = document.forms["iletisimForm"]["e-mail"].value;
    if(emailDogrulama(c) == false)
    {
        alert("Geçerli bir e-mail giriniz.")
        return false;
    }
}

function emailDogrulama(email) 
{
    var tester = /\S+@\S+\.\S+/;
	
    return tester.test(email);
}
