const kingston_adult_ticket_cost = 180;
const kingston_child_ticket_cost = 90;
const portland_adult_ticket_cost = 200;
const portland_child_ticket_cost = 100;
const negril_adult_ticket_cost = 280;
const negril_child_ticket_cost = 140;
const ochorios_adult_ticket_cost = 240;
const ochorios_child_ticket_cost = 120;
const montegobay_adult_ticket_cost = 260;
const montegobay_child_ticket_cost = 130;

var total_cost_of_adult_tickets = 0;
var total_cost_of_children_tickets = 0;
var total_cost_of_all_tickets = 0;


/*************Make sure at least one destination is checked***************** */
function minimum_check() {

    /**get status of checkboxes**/
    var kingston = $("#destinations-0").prop("checked");
    var portland = $("#destinations-1").prop("checked");
    var negril = $("#destinations-2").prop("checked");
    var ochorios = $("#destinations-3").prop("checked");
    var montegobay = $("#destinations-4").prop("checked");

    /** if none is selected set ocho rios to selected */
    if (kingston == false && portland == false && negril == false && ochorios == false && montegobay == false) {
        $("#destinations-4").prop("checked", true);
    }

}

function minimum_persons_check() {

    var adults_tickets = parseInt($("#adult_tickets").val());
    var children_tickets = parseInt($("#children_tickets").val());

    if (adults_tickets == 0 && children_tickets == 0) {
        $("#adult_tickets").val("1");
    }
}

/**
 * Calculate the values of variables already on screen
 */

function intial_values() {
    var adults_tickets = parseInt($("#adult_tickets").val());
    var children_tickets = parseInt($("#children_tickets").val());

    /**********find out which destinations are currently selected  and calculate******/


    /**get status of checkboxes**/
    var kingston = $("#destinations-0").prop("checked");
    var portland = $("#destinations-1").prop("checked");
    var negril = $("#destinations-2").prop("checked");
    var ochorios = $("#destinations-3").prop("checked");
    var montegobay = $("#destinations-4").prop("checked");

    if (adults_tickets == 0 && children_tickets == 0) {
        $("#adult_tickets").val("1");
    }

    if (kingston == true) {
        var total_cost_of_kingston_adult_tickets = kingston_adult_ticket_cost * adults_tickets;
        var total_cost_of_kingston_children_tickets = kingston_child_ticket_cost * children_tickets;
        total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_kingston_adult_tickets;
        total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_kingston_children_tickets;
        total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
    }

    if (portland == true) {
        var total_cost_of_portland_adult_tickets = portland_adult_ticket_cost * adults_tickets;
        var total_cost_of_portland_children_tickets = portland_child_ticket_cost * children_tickets;
        total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_portland_adult_tickets;
        total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_portland_children_tickets;
        total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
    }

    if (negril == true) {
        var total_cost_of_negril_adult_tickets = negril_adult_ticket_cost * adults_tickets;
        var total_cost_of_negril_children_tickets = negril_child_ticket_cost * children_tickets;
        total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_negril_adult_tickets;
        total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_negril_children_tickets;
        total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
    }

    if (ochorios == true) {
        var total_cost_of_ochorios_adult_tickets = ochorios_adult_ticket_cost * adults_tickets;
        var total_cost_of_ochorios_children_tickets = ochorios_child_ticket_cost * children_tickets;
        total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_ochorios_adult_tickets;
        total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_ochorios_children_tickets;
        total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
    }

    if (montegobay == true) {
        var total_cost_of_montegobay_adult_tickets = montegobay_adult_ticket_cost * adults_tickets;
        var total_cost_of_montegobay_children_tickets = montegobay_child_ticket_cost * children_tickets;
        total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_montegobay_adult_tickets;
        total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_montegobay_children_tickets;
        total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
    }
    update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);
}

function minimum_persons_check() {

    var adults_tickets = parseInt($("#adult_tickets").val());
    var children_tickets = parseInt($("#children_tickets").val());

    if (adults_tickets == 0 && children_tickets == 0) {
        $("#adult_tickets").val("1");
    }
}

/************* Run intial functoins***************************************/
$(document).ready(
    function () {
        minimum_check();
        minimum_persons_check();
        intial_values();
    }
);




function update_totals(child_ticket, adult_ticket, child_total, adult_total, total) {

    $("#adult_text").text("Adult x " + adult_ticket);
    $("#adult_total").text("$ " + adult_total);
    $("#child").text("Child(ren) x " + child_ticket);
    $("#child_total").text("$ " + child_total);
    $("#total").text("$ " + total);
    $("#grandtotal").val(total);
}

// Update price if kingston is clicked
$(document).ready(function () {
    $('#destinations-0').click(function () {
        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        if ($(this).prop("checked") == true) {
            var total_cost_of_kingston_adult_tickets = kingston_adult_ticket_cost * adults_tickets;
            var total_cost_of_kingston_children_tickets = kingston_child_ticket_cost * children_tickets;
            console.log("total cost of adult tickets precalculation : " + total_cost_of_adult_tickets);
            total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_kingston_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_kingston_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }

        else if ($(this).prop("checked") == false) {
            var total_cost_of_kingston_adult_tickets = kingston_adult_ticket_cost * adults_tickets;
            var total_cost_of_kingston_children_tickets = kingston_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - total_cost_of_kingston_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets - total_cost_of_kingston_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }
        update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);

    });
});



// Update price if portland is clicked
$(document).ready(function () {
    $('#destinations-1').click(function () {
        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        if ($(this).prop("checked") == true) {
            var total_cost_of_portland_adult_tickets = portland_adult_ticket_cost * adults_tickets;
            var total_cost_of_portland_children_tickets = portland_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_portland_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_portland_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }

        else if ($(this).prop("checked") == false) {
            var total_cost_of_portland_adult_tickets = portland_adult_ticket_cost * adults_tickets;
            var total_cost_of_portland_children_tickets = portland_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - total_cost_of_portland_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets - total_cost_of_portland_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }
        update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);

    });
});



// Update price if negril is clicked
$(document).ready(function () {
    $('#destinations-2').click(function () {
        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        if ($(this).prop("checked") == true) {
            var total_cost_of_negril_adult_tickets = negril_adult_ticket_cost * adults_tickets;
            var total_cost_of_negril_children_tickets = negril_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_negril_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_negril_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }

        else if ($(this).prop("checked") == false) {
            var total_cost_of_negril_adult_tickets = negril_adult_ticket_cost * adults_tickets;
            var total_cost_of_negril_children_tickets = negril_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - total_cost_of_negril_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets - total_cost_of_negril_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }
        update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);

    });
});

// Update price if ochorios is clicked
$(document).ready(function () {
    $('#destinations-3').click(function () {
        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        if ($(this).prop("checked") == true) {
            var total_cost_of_ochorios_adult_tickets = ochorios_adult_ticket_cost * adults_tickets;
            var total_cost_of_ochorios_children_tickets = ochorios_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_ochorios_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_ochorios_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }

        else if ($(this).prop("checked") == false) {
            var total_cost_of_ochorios_adult_tickets = ochorios_adult_ticket_cost * adults_tickets;
            var total_cost_of_ochorios_children_tickets = ochorios_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - total_cost_of_ochorios_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets - total_cost_of_ochorios_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }
        update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);

    });
});


// Update price if montegobay is clicked
$(document).ready(function () {
    $('#destinations-4').click(function () {
        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        if ($(this).prop("checked") == true) {
            var total_cost_of_montegobay_adult_tickets = montegobay_adult_ticket_cost * adults_tickets;
            var total_cost_of_montegobay_children_tickets = montegobay_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets + total_cost_of_montegobay_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets + total_cost_of_montegobay_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }

        else if ($(this).prop("checked") == false) {
            var total_cost_of_montegobay_adult_tickets = montegobay_adult_ticket_cost * adults_tickets;
            var total_cost_of_montegobay_children_tickets = montegobay_child_ticket_cost * children_tickets;
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - total_cost_of_montegobay_adult_tickets;
            total_cost_of_children_tickets = total_cost_of_children_tickets - total_cost_of_montegobay_children_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
        }
        update_totals(children_tickets, adults_tickets, total_cost_of_children_tickets, total_cost_of_adult_tickets, total_cost_of_all_tickets);

    });
});

function calcalate_adult_destination() {
    var kingston = $("#destinations-0").prop("checked");
    var portland = $("#destinations-1").prop("checked");
    var negril = $("#destinations-2").prop("checked");
    var ochorios = $("#destinations-3").prop("checked");
    var montegobay = $("#destinations-4").prop("checked");
    var adult_counter = 0;

    if (kingston == true) {
        adult_counter += kingston_adult_ticket_cost;
    }

    if (portland == true) {
        adult_counter += portland_adult_ticket_cost;
    }

    if (negril == true) {
        adult_counter += negril_adult_ticket_cost;
    }

    if (ochorios == true) {
        adult_counter += ochorios_adult_ticket_cost;
    }

    if (montegobay == true) {
        adult_counter += montegobay_adult_ticket_cost;
    }
    return adult_counter;
}


function calcalate_children_destination() {
    var kingston = $("#destinations-0").prop("checked");
    var portland = $("#destinations-1").prop("checked");
    var negril = $("#destinations-2").prop("checked");
    var ochorios = $("#destinations-3").prop("checked");
    var montegobay = $("#destinations-4").prop("checked");
    var child_counter = 0;

    if (kingston == true) {
        child_counter += kingston_child_ticket_cost;
    }

    if (portland == true) {
        child_counter += portland_child_ticket_cost;
    }

    if (negril == true) {
        child_counter += negril_child_ticket_cost;
    }

    if (ochorios == true) {
        child_counter += ochorios_child_ticket_cost;
    }

    if (montegobay == true) {
        child_counter += montegobay_child_ticket_cost;
    }
    return child_counter;
}

// this function updates the price once dropbox is changed
$(document).ready(function () {
    $("#adult_tickets").change(
        function () {
            minimum_persons_check();
            adults_tickets = parseInt($("#adult_tickets").val());
            var destination_total_adult = calcalate_adult_destination();
            total_cost_of_adult_tickets = destination_total_adult * adults_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
            $("#adult_text").text("Adult x " + adults_tickets);
            $("#adult_total").text("$ " + total_cost_of_adult_tickets);
            $("#total").text("$ " + total_cost_of_all_tickets);
            $("#grandtotal").val(total_cost_of_all_tickets);
        });

    $("#children_tickets").change(
        function () {
            minimum_persons_check();
            child_tickets = parseInt($("#children_tickets").val());
            var destination_total_child = calcalate_children_destination();
            total_cost_of_children_tickets = destination_total_child * child_tickets;
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
            $("#child").text("Child(ren) x " + child_tickets);
            $("#child_total").text("$ " + total_cost_of_children_tickets);
            $("#total").text("$ " + total_cost_of_all_tickets);
            $("#grandtotal").val(total_cost_of_all_tickets);
        });

});
