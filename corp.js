
function memform(){
    document.getElementById("Join").addEventListener("click",formChecker);

}
function formChecker() {

    var info1 = document.forms["memForm"]["fn"].value;
    var info2 = document.forms["memForm"]["sn"].value;
    var info3 = document.forms["memForm"]["email"].value;
    var info4 = document.forms["memForm"]["age"].value;
    var info5 = document.forms["memForm"]["continue"].value;
    var info6 = Math.round(document.forms["memForm"]["duration"].value);
    var info7 = document.forms["memForm"]["confidence"].value;
    var info8 = document.forms["memForm"]["discount"].value;


    if(info1==="" || info2==="" || info3==="" || info4==="" || info5==="" || info6===""){
        alert("Gaeilge: Sonrai tabhachtach in aisneamh\nEnglish: You are missing important form details");
    }else if(info6<1) {
        alert("Please enter a valid duration in months");
    }
    else{
        if(info8==="CORP2018"){
            alert("Discount code valid");
            var amount = (info6*35)*0.9;
            alert("Go raibh maith agat "+info1+ ".\n Amount paid: "+amount);
        }else{
            var amount = info6*35;
            alert("Go raibh maith agat "+info1+ ".\n Amount paid: "+amount);
        }

    }
}