function toggle() {

    //retrieve checkbox object
    var cash = document.getElementById("cash");

    //retreive payment section object
    var payment_section = document.getElementById('payment');

    //retrieve card button object
    var payment_card = document.getElementById('submit_card');

    //retrieve cash button object
    var payment_cash = document.getElementById('submit_cash');

    //retrive credit card input fields
    var cc_num = document.getElementById('cc_num');
    var month = document.getElementById('month');
    var year = document.getElementById('year');
    var cvc = document.getElementById('cvc');

    if (cash.checked == true) {
        payment.style.display = "none";
        payment_card.style.display = "none";
        payment_cash.style.display = "block";

        cc_num.required = false;
        month.required = false;
        year.required = false;
        cvc.required = false;

    } else {
        payment.style.display = "block";
        payment_card.style.display = "block";
        payment_cash.style.display = "none";
    }
}
