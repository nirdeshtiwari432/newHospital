function showBookingForm(hospitalId) {
    var bookingForm = document.getElementById('bookingForm');
    var hospitalIdField = document.getElementById('hospitalId');
    bookingForm.style.display = 'block';
    hospitalIdField.value = hospitalId;
}