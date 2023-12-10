//Cement
function cement()
{
   var cement_Quantity=document.getElementById('form3Example2').value;
   var cement_Rate=document.getElementById('form3Example3').value;
   var result1=cement_Quantity*cement_Rate;
   document.getElementById('form3Example4').value=Math.abs(result1);
   

}

//Marbal
function marbal()
{
   var marbal_Quantity=document.getElementById('form3Example5').value;
   var marbal_Rate=document.getElementById('form3Example6').value;
   var result2=marbal_Quantity*marbal_Rate;
   document.getElementById('form3Example7').value=Math.abs(result2);
   
}
//total bill
function tbill()
{
   var marbal_Quantity=document.getElementById('form3Example5').value;
   var marbal_Rate=document.getElementById('form3Example6').value;
   var result2=marbal_Quantity*marbal_Rate;
   var cement_Quantity=document.getElementById('form3Example2').value;
   var cement_Rate=document.getElementById('form3Example3').value;
   var result1=cement_Quantity*cement_Rate;
   
    var Result=Math.abs(result1)+Math.abs(result2);
   document.getElementById('form3Example8').value=Math.abs(Result);
   
}

//Currnt date

function date()
{
   var date=new Date();  
   var day=date.getDate();  
   var month=date.getMonth()+1;  
   var year=date.getFullYear();  
    
   if(month<10){
    document.getElementById('form3Example15').value=year+"-0"+month+"-"+day;
   }
    else{
      document.getElementById('form3Example15').value=year+"-"+month+"-"+day;
    }
   
}

//Telephone Number


function phonenumber()
{
   var a=document.getElementById('form3Example13').value;
  var phoneno = /^\d{10}$/;
  if((a.match(phoneno)))
   {
      return true;
   }
      else
        {
        alert("Phone number must have 10 digit");
        return false;
        }
}

//Submit Form
function submitForm(){

  

   document.priceOptionForm.submit();
   document.priceOptionForm.method='post';
}

//Print


    let print = () => {
        let objFra = document.getElementById('print');
      //   objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }

//Backed
function backed()
{
window.location.href="backed.php";
}
function r()
{
window.location.href="payment.php";
}

//Home
function Home(){
   document.location.href="Home.php";
}

//Token Id

function data()
{
   document.location.href="checkbill.php";
}





