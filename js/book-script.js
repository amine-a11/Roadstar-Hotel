/* handlecid(handle check-in-date) : add a max date to the check out calender 
   handlecod(handle check-out-date): add a min date to the check in calender
*/
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
//this function calc the number of nights between check-in-date and check-out-date
function calc_number_of_nights() {
    const cod = document.getElementById("check-out-calender");
    const cid = document.getElementById("check-in-calender");
    let cod1;
    let cid1;
    if (cod !== null) cod1 = (new Date(cod.value)).getTime();
    if (cid !== null) cid1 = (new Date(cid.value)).getTime();
    if (cod1 !== null && cid1 !== null) {
        const diffdays = Math.ceil(cod1 - cid1) / (1000 * 60 * 60 * 24);
        document.getElementById("nb-of-nights").innerHTML = (diffdays ? diffdays : "");
    }
}


//increase or decrease the number of Adults or childs in the room
function stepper(btn) {
    let id = btn.getAttribute("id");
    let x = document.getElementById(id.split("-")[0] + "-" + btn.parentNode.className + "-value");
    let max = x.getAttribute("max");
    let min = x.getAttribute("min");
    if (id.includes("increase") && x.value < max) {
        x.value++;
    }
    if (id.includes("decrease") && x.value > min) {
        x.value--;
    }
}

//this funtion add a new room
let nb_of_rooms = 1;

function addRoom() {
    let room = document.getElementById("room1");
    let newRoom = room.cloneNode(true);
    nb_of_rooms++;
    let newId = "room" + nb_of_rooms.toString();
    newRoom.id = newId;

    let decrease_buttons = [...newRoom.querySelectorAll(".decrease")];
    decrease_buttons.forEach(ele => {
        ele.id = "room" + nb_of_rooms.toString() + "-decrease";
    });
    let increase_buttons = [...newRoom.querySelectorAll(".increase")];
    increase_buttons.forEach(ele => {
        ele.id = "room" + nb_of_rooms.toString() + "-increase";
    });
    let input_adu = newRoom.querySelector("#room1-nb-of-adu-value");
    input_adu.id = "room" + nb_of_rooms.toString() + "-nb-of-adu-value";
    let input_chi = newRoom.querySelector("#room1-nb-of-chi-value");
    input_chi.id = "room" + nb_of_rooms.toString() + "-nb-of-chi-value";
    newRoom.querySelector("#room-nb").textContent = "ROOM" + nb_of_rooms.toString();
    document.querySelector(".container2").appendChild(newRoom);
    if (nb_of_rooms === 4) {
        let butn = document.getElementById("add-new-room");
        butn.classList.remove("show");
        butn.classList.add("hide");
    }
    if (nb_of_rooms >= 1) {
        let butn = document.getElementById("remove-room");
        butn.classList.remove("hide");
        butn.classList.add("show");
    }

}


//this function remove the last room
function removeRoom() {

    let elem = document.getElementById("room" + nb_of_rooms.toString());
    elem.remove();
    nb_of_rooms--;
    if (nb_of_rooms === 1) {
        let butn = document.getElementById("remove-room");
        butn.classList.remove("show");
        butn.classList.add("hide");
    }
    if (nb_of_rooms < 4) {
        let butn = document.getElementById("add-new-room");
        butn.classList.remove("hide");
        butn.classList.add("show");
    }
}


//move between the diffrente form steps

let nextBtn = document.querySelectorAll(".next-button");
let progressSteps = document.querySelectorAll(".progress-step");
let formSteps = document.querySelectorAll(".form-step");
let formStepNum = 0;
nextBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepNum++;
        if (formStepNum === 1) {
            fillBookingInfo();
        }
        updateFormStep();
        updateProgressSteps();
    });
});

function updateFormStep() {
    formSteps.forEach(step => {
        if (step.classList.contains("form-step-active")) {
            step.classList.remove("form-step-active");
        }
    });
    formSteps[formStepNum].classList.add("form-step-active");
}

function updateProgressSteps() {
    progressSteps.forEach((step, idx) => {
        if (idx - 1 < formStepNum) {
            step.classList.add("progress-step-active");
        } else {
            step.classList.remove("progress-step-active");
        }
    });
}



function fillBookingInfo() {
    const cid = document.getElementById("check-in-calender").value;
    const cod = document.getElementById("check-out-calender").value;
    let num_of_adu = 0;
    let num_of_child = 0;
    for (let i = 1; i <= nb_of_rooms; i++) {
        num_of_adu += parseInt(document.getElementById("room" + i.toString() + "-nb-of-adu-value").value);
    }
    for (let i = 1; i <= nb_of_rooms; i++) {
        num_of_child += parseInt(document.getElementById("room" + i.toString() + "-nb-of-chi-value").value);
    }

    let date = document.getElementById("cid-cod");
    date.innerHTML = cid + " - " + cod;
    let nb_adu_chi = document.getElementById("nb-adu-child");
    nb_adu_chi.innerHTML = num_of_adu.toString() + " ADULTS" + (num_of_child === 0 ? " " : " & " + num_of_child.toString() + " CHILDREN");
    let nbRooms = document.getElementById("nbOfRooms");
    nbRooms.innerHTML = nb_of_rooms.toString();
}