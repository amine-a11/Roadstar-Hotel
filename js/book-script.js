function handlecid() {
    const cod = document.getElementById("check-out-calender").value;
    console.log(cod);
    document.getElementById("check-in-calender").setAttribute("max", cod);
}
function handlecod() {
    const cod = document.getElementById("check-in-calender").value;
    console.log(cod);
    document.getElementById("check-out-calender").setAttribute("min", cod);
}