var total_cost_of_adult_tickets = 0;
var total_cost_of_children_tickets = 0;
var total_cost_of_all_tickets = 0;
var dest_total = 0;
var adults_tickets = 0;
var children_tickets = 0;
const kingston_adult_ticket_cost = 180;
const kingston_child_ticket_cost = 90;



// set default price from DOM
// $(document).ready(
//     function () {
//         if ($(location).attr('pathname') != "stepone") {
//             $('#adult').text("Adult x 1");
//             $('#adult_total').text("$0");
//             $('#total').text("$0");
//         }
//     }
// );

// Update price if kingston is clicked
$(document).ready(function () {


    $('#destinations-0').click(function () {

        var adults_tickets = parseInt($("#adult_tickets").val());
        var children_tickets = parseInt($("#children_tickets").val());
        // console.log(
        //     "adults_tickets :" + adults_tickets + "\n" +
        //     "children_tickets :" + children_tickets + "\n" +
        //     "adults_tickets_totals :" + adults_tickets_total + "\n" +
        //     "children_tickets_total :" + children_tickets_total + "\n" +
        //     "kingston_adult :" + kingston_adult + "\n" +
        //     "kingston_child :" + kingston_child + "\n"
        // );



        if ($(this).prop("checked") == true) {
            // $("#result").html("Checkbox is checked.");
            total_cost_of_adult_tickets = adults_tickets * kingston_adult_ticket_cost;
            console.log("total cost of adult tickets : " + total_cost_of_adult_tickets);
            total_cost_of_children_tickets = children_tickets * kingston_child_ticket_cost;
            console.log("total cost of children tickets : " + total_cost_of_children_tickets);
            total_cost_of_all_tickets = total_cost_of_adult_tickets + total_cost_of_children_tickets;
            console.log("total cost of all tickets : " + total_cost_of_all_tickets);
            $('#total').text("$" + total_cost_of_all_tickets);
        }



        else if ($(this).prop("checked") == false) {
            //$("#result").html("Checkbox is unchecked.");
            total_cost_of_adult_tickets = total_cost_of_adult_tickets - (adults_tickets * kingston_adult_ticket_cost);
            console.log("total cost of adult tickets : " + total_cost_of_adult_tickets);
            total_cost_of_children_tickets = total_cost_of_children_tickets - (children_tickets * kingston_child_ticket_cost);
            console.log("total cost of children tickets : " + total_cost_of_children_tickets);
            total_cost_of_all_tickets = total_cost_of_all_tickets - total_cost_of_adult_tickets;
            total_cost_of_all_tickets = total_cost_of_all_tickets - total_cost_of_children_tickets;
            console.log("total cost of all tickets : " + total_cost_of_all_tickets);
            $('#total').text("$" + total_cost_of_all_tickets);
        }
    });
});

// this function updates the price once dropbox is changed
$(document).ready(function () {
    $("#adult_tickets").change(
        function () {
            adults_tickets = $("#adult_tickets").val();
            $("#adult_text").text("Adult x" + adults_tickets);
            $("#adult_total").text("$ " + total_cost_of_adult_tickets);
        });

    $("#children_tickets").change(
        function () {
            child_tickets = $("#children_tickets").val();
            $("#child").text("Children x" + child_tickets);
            $("#child_total").text("$ " + total_cost_of_adult_tickets);
        });
});
