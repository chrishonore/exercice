<script>
    function afficherForm(idForm) {
    var allForms = document.querySelectorAll("form[id^='form']");
    allForms.forEach(function (form) {
    form.style.display="none";
});
    var formToShow = document.getElementById(idForm);
    if (formToShow) {
    formToShow.style.display="block";
}
}
</script>