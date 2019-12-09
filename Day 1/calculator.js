function setValue(x)
{
    console.log("Inside function value="+x);
    document.getElementById("num1").value+=x;
}

function calculate()
{

    var x= document.getElementById("num1").value;
    var result=eval(x);
    document.getElementById("num2").value=result;
    console.log("Result is="+result);
}

function clearText()
{
    console.log("Inside clearText");
    document.getElementById("num1").value="";
}