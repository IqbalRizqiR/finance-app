function openModal() {
        document.getElementById("modal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

function increaseValue() {
    var activeElement = document.querySelector('.increase');
    var inactiveElement = document.querySelector('.decrease');
    let myInput = document.getElementById('transaction_type');
    myInput.setAttribute('value', 'income');
    inactiveElement.classList.remove('active');
    activeElement.classList.toggle('active');
}
function decreaseValue() {
    var activeElement = document.querySelector('.decrease');
    var inactiveElement = document.querySelector('.increase');
    let myInput = document.getElementById('transaction_type');
    myInput.setAttribute('value', 'expense');
    inactiveElement.classList.remove('active');
    activeElement.classList.toggle('active');
}
