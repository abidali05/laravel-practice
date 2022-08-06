jQuery('document').ready(function() {
    $('.add_another').click(function() {
        $("#tbl").append('<tr><td><input type="text" class="form-control"></td><td><input type="date" class="form-control"></td><td><input type="number" class="form-control"></td><td><select class="form-select" aria-label="Default select example"><option selected>Open this select menu</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option></select></td><td> <input type="submit" class="button add_another" value="Add"/></td></tr>');
    });
})