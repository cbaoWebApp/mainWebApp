$(document).ready(function () {
    $("#parent_typeOfOccupancy").change(function () {
        var parent = $("#parent_typeOfOccupancy").val(); //get option value from parent 
        switch (parent) { //using switch compare selected option and populate child
            case 'residential':
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#residential").css("display", "block");
                break;
            case 'commercial':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#commercial").css("display", "block");
                break;
            case 'street':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#street").css("display", "block");
                break;
            case 'industrial':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#industrial").css("display", "block");
                break;
            case 'institutional':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#institutional").css("display", "block");
                break;
            case 'agricultural':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#others").css("display", "none");
                $("#others").val("");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                $("#agricultural").css("display", "block");
                break;
            case 'others':
                $("#residential").css("display", "none");
                $("#residential :selected").prop("selected", false);
                $("#commercial").css("display", "none");
                $("#commercial :selected").prop("selected", false);
                $("#street").css("display", "none");
                $("#street :selected").prop("selected", false);
                $("#industrial").css("display", "none");
                $("#industrial :selected").prop("selected", false);
                $("#institutional").css("display", "none");
                $("#institutional :selected").prop("selected", false);
                $("#agricultural").css("display", "none");
                $("#agricultural :selected").prop("selected", false);
                $("#others").css("display", "block");
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").val("");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#residential", function () {
        var residential = $(this).val();

        switch (residential) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#commercial", function () {
        var commercial = $(this).val();

        switch (commercial) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#street", function () {
        var street = $(this).val();

        switch (street) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#industrial", function () {
        var industrial = $(this).val();

        switch (industrial) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#institutional", function () {
        var institutional = $(this).val();

        switch (institutional) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });

    $("#child_typeOfOccupancy").on("change", "#agricultural", function () {
        var agricultural = $(this).val();

        switch (agricultural) {
            case "others":
                $("#typeOfOccupancy_others").css("display", "block");
                break;

            default:
                $("#typeOfOccupancy_others").css("display", "none");
                $("#typeOfOccupancy_others").removeAttr("value");
                break;
        }
    });
})(jQuery);
