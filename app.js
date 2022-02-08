function show() {
    let form = document.getElementById("reviewForm");
    form.style.display = "block";
    form.style.marginLeft = "200%";
    setTimeout(transition, 10);
}

function hide() {
    let form = document.getElementById("reviewForm");
    form.style.display = "none";
}

function transition() {
    let form = document.getElementById("reviewForm");
    form.style.marginLeft = "0";
}
function change() {
    let errorMessage = document.getElementById("ErrorMessage");
    let reviewText = document.getElementById("review").value;
    let count = reviewText.length;
    if (!errorMessage.classList.contains("hideError") && count != 0)
        errorMessage.classList.add("hideError");
    let counter = document.getElementById("counter");
    counter.innerHTML = count + "/500";
}

function incrementBtn() {
    let counterAmount = document.getElementById("counterAmount");
    let newValue = +counterAmount.value + (1);
    counterAmount.value = newValue;
    counterAmount.innerHTML = newValue;
}
function decrementBtn() {
    let counterAmount = document.getElementById("counterAmount");
    let newValue = +counterAmount.value - (1);
    if (newValue > 0) {
        counterAmount.value = newValue;
        counterAmount.innerHTML = newValue;
    }
}

function validate() {
    let review = document.getElementById("review").value;
    let name = document.getElementById("name");
    if (review == "") {
        let errorMessage = document.getElementsByClassName("hideError")[0];
        errorMessage.classList.remove("hideError")
        return false;
    }
    if (name.value == "")
        name.value = "Customer";
    return true;
}
// function addQuantity() {
//     let quantity = document.getElementById("qua");
//     quantity.value = document.getElementById("counterAmount").value;
//     return true;
// }

function displayReciept() {
    // Create template
    var box = document.createElement("div");
    var cancel = document.createElement("button");
    cancel.innerHTML = "Cancel";
    cancel.onclick = function () { document.body.removeChild(this.parentNode) }
    var text = document.createTextNode("Please enter a message!");
    var input = document.createElement("textarea");
    box.appendChild(text);
    box.appendChild(input);
    box.appendChild(cancel);

    // Style box
    box.style.position = "absolute";
    box.style.width = "400px";
    box.style.height = "300px";

    // Center box.
    box.style.left = (window.innerWidth / 2) - 100;
    box.style.top = "100px";

    // Append box to body
    document.body.appendChild(box);
}