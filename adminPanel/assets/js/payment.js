function myFunction() {
  // Get the checkbox
  var chequeCheck = document.getElementById("radio1");
  // Get the output text
  var bankCheck = document.getElementById("radio2");
  // Get the output text
  var tamanCheck = document.getElementById("radio3");
  // Get the output text
  var bank = document.getElementById("bank");
  var chequeNo = document.getElementById("chequeNo");
  var transactionDate = document.getElementById("transactionDate");
  var amount = document.getElementById("amount");

  // If the checkbox is checked, display the output text
  if (chequeCheck.checked == true){
     bank.style.display = "block";
    chequeNo.style.display = "block";
       transactionDate.style.display = "none";
    amount.style.display = "block";
  } 
  else if(bankCheck.checked == true){
      chequeNo.style.display = "none";
     bank.style.display = "block";
    transactionDate.style.display = "block";
    amount.style.display = "block";
  }    
    else {
     bank.style.display = "none";
    transactionDate.style.display = "none";
    amount.style.display = "none";
    chequeNo.style.display = "none";
  }
    
   
    
    
    
    
}