/* Waleed Khan (August 12, 2023) */

//client-side validation for the insert.php form for user entry
document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        var productName = form.querySelector("input[name='productName']").value;
        var productPrice = form.querySelector("input[name='productPrice']").value;

        //handling if the name field is empty
        if (productName.trim() === "") {
            alert("Enter a name for the product.");
            event.preventDefault();
            return;
        }

        //handling if the price field is empty or not a valid numerical value
        if (productPrice.trim() === "" || isNaN(productPrice)) {
            alert("Invalid entry! Price must be a valid numerical value.");
            event.preventDefault();
            return;
        }
    });
});
