document.addEventListener("alert", (event) => {
    const message = event.detail;
    const alertContainer = document.getElementById("alert") || document.body;
    const alert = document.createElement("template");
    alert.innerHTML = message;
    alertContainer.appendChild(alert.content.firstChild);
});
