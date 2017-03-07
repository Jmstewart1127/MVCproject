
// var request;
// $(document).ready(function () {
//     $("#signUp").submit(function (event) {
//         if (request) {
//             request.abort();
//         }
//         var $form = $(this);
//         var serializedData = $form.serialize();
//         request = $.ajax({
//             url:'../postSignUp.php',
//             type:'POST',
//             data: serializedData
//         });
//
//         request.fail(function (jqXHR, textstatus, errorThrown){
//             console.error(
//                 "Error: "+
//                 textStatus, errorThrown
//             );
//         });
//
//         request.always(function () {
//             $inputs.prop("disabled", false);
//         });
//         event.preventDefault();
//     });
// });


// var request;                        // ajax call for clocking in.
// $(document).ready(function () {
//     $("#clockIn").click(function (event) {
//         if (request) {
//             request.abort();
//         }
//         var $form = $(this);
//         var serializedData = $form.serialize();
//         request = $.ajax({
//             url:'../timeClockDriver.php',       // Whatever file that holds the controller functionality.
//             type:'GET',
//             data: serializedData
//         });
//
//         request.fail(function (jqXHR, textstatus, errorThrown){
//             console.error(
//                 "Error: "+
//                 textStatus, errorThrown
//             );
//         });
//         request.always(function () {
//             $inputs.prop("disabled", false);
//         });
//         event.preventDefault();
//     });
// });

$( document ).ready(function() {
    $('#clockIn').click(function(){
        $.ajax({
            type:'GET',
            url: 'timeClockDriver.php',
            dataType: 'html',
            success: function(result){
                $('#timeDisplay').html(result);
            }
        });

    });
});