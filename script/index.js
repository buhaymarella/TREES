function removeBackgroundImage(element) {
    element.style.backgroundImage = 'none';
    return false;
} //REMOVES BG-IMG//

//FOR DATE PLACEHOLDER LANG 'TO//
$(document).ready(function() {
    $('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    placeholder: 'Date of Birth'
    });
});

function navigateToPage() {
    const pageSelect = document.getElementById("form-select");
    const selectedPage = pageSelect.value;

    if (selectedPage) {
        window.location.href = selectedPage;
    }
    return false;
}

//for print page
function printDiv() {
    var printContents = document.getElementById("permit").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
    
//for appearing form
function toggleForm() {
    var form = document.getElementById("myForm");
    form.classList.toggle("hidden");
    form.classList.toggle("fade-in");
    form.classList.toggle("visible");
}