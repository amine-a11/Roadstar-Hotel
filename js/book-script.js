function handlecid() {
    const cod = document.getElementById("check-out-calender").value;
    document.getElementById("check-in-calender").setAttribute("max", cod);
    calc_number_of_nights();
}
function handlecod() {
    const cid = document.getElementById("check-in-calender").value;
    document.getElementById("check-out-calender").setAttribute("min", cid);
    calc_number_of_nights();
}
function calc_number_of_nights() {
    const cod = document.getElementById("check-out-calender");
    const cid = document.getElementById("check-in-calender");
    let cod1;
    let cid1;
    if (cod !== null) {
        cod1 = cod.value;
    }
    if (cid !== null) {
        cid1 = cid.value;
    }
    if (cod1 !== null && cid1 !== null) {
        const diffdays = Math.ceil(((new Date(cod1)).getTime() - (new Date(cid1)).getTime()) / (1000 * 60 * 60 * 24));
        document.getElementById("nb-of-nights").innerHTML = (diffdays ? diffdays : "");
    }
}
