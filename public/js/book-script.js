/*
TO DO: 
- add the tomorrow Date
- refactor the fillBookingSummary function and fillBookingInfo function
*/
let today = new Date();
let tomorrow = new Date(today);
tomorrow.setDate(tomorrow.getDate() + 1);
document.getElementById("check-in-calender").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
// document.getElementById("check-in-calender").setAttribute("min", today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2));
document.getElementById("check-out-calender").value = tomorrow.getFullYear() + '-' + ('0' + (tomorrow.getMonth() + 1)).slice(-2) + '-' + ('0' + tomorrow.getDate()).slice(-2);
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

// function addRoom() {
//     let room = document.getElementById("room1");
//     let newRoom = room.cloneNode(true);
//     nb_of_rooms++;
//     let newId = "room" + nb_of_rooms.toString();
//     newRoom.id = newId;

//     let decrease_buttons = [...newRoom.querySelectorAll(".decrease")];
//     decrease_buttons.forEach(ele => {
//         ele.id = "room" + nb_of_rooms.toString() + "-decrease";
//     });
//     let increase_buttons = [...newRoom.querySelectorAll(".increase")];
//     increase_buttons.forEach(ele => {
//         ele.id = "room" + nb_of_rooms.toString() + "-increase";
//     });
//     let input_adu = newRoom.querySelector("#room1-nb-of-adu-value");
//     input_adu.id = "room" + nb_of_rooms.toString() + "-nb-of-adu-value";
//     input_adu.value = "1";
//     let input_chi = newRoom.querySelector("#room1-nb-of-chi-value");
//     input_chi.id = "room" + nb_of_rooms.toString() + "-nb-of-chi-value";
//     input_chi.value = "0";
//     newRoom.querySelector("#room-nb").textContent = "ROOM" + nb_of_rooms.toString();
//     document.querySelector(".container2").appendChild(newRoom);
//     if (nb_of_rooms === 4) {
//         let butn = document.getElementById("add-new-room");
//         butn.classList.remove("show");
//         butn.classList.add("hide");
//     }
//     if (nb_of_rooms >= 1) {
//         let butn = document.getElementById("remove-room");
//         butn.classList.remove("hide");
//         butn.classList.add("show");
//     }

// }


//this function remove the last room
// function removeRoom() {

//     let elem = document.getElementById("room" + nb_of_rooms.toString());
//     elem.remove();
//     nb_of_rooms--;
//     if (nb_of_rooms === 1) {
//         let butn = document.getElementById("remove-room");
//         butn.classList.remove("show");
//         butn.classList.add("hide");
//     }
//     if (nb_of_rooms < 4) {
//         let butn = document.getElementById("add-new-room");
//         butn.classList.remove("hide");
//         butn.classList.add("show");
//     }
// }




let nextBtn = document.querySelectorAll(".next-button");
let prevBtn = document.querySelectorAll(".prev-button");
let progressSteps = document.querySelectorAll(".progress-step");
let formSteps = document.querySelectorAll(".form-step");
let formStepNum = 0;

//function stepValid()
function stepValid() {
    const inputsValid = [...formSteps[formStepNum].querySelectorAll("input")].every(input => input.reportValidity());
    if (formStepNum === 2) {
        e1 = document.getElementById('email').value;
        e2 = document.getElementById('confirmEmail').value;
        if (e1 !== e2) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "email and confirm email are not the same"
            })
            return false;
        } else {
            return inputsValid;
        }
    } else {
        return inputsValid;
    }
}
//move between the diffrente form steps 
let test = true;
nextBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        test = true;
        if (stepValid()) {
            if (formStepNum === 2) {
                check_if_reservation_exists();
                console.log(test);
            }
            if (test) {
                formStepNum++;
                // console.log(formStepNum);
                if (formStepNum === 1) {
                    fillBookingInfo();
                }
                updateFormStep();
                if (formStepNum !== 3) {
                    updateProgressSteps();
                }
                window.scrollTo(0, 0);
            }
        }
    });
});
prevBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepNum--;
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


//this function fills the booking info in the 2nd step
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



//drop down for the sort and filter in the 2nd step

document.addEventListener('click', e => {
    const isdropdownbutton = e.target.matches("[data-dropdown-button]");
    //                               |  this click is inside of a dropdown
    //                               v  
    if (!isdropdownbutton && e.target.closest('[data-dropdown]') != null) return;

    let currdropdown
    if (isdropdownbutton) {
        currdropdown = e.target.closest('[data-dropdown]');
        currdropdown.classList.toggle('active');
    }
    document.querySelectorAll('[data-dropdown].active').forEach(dd => {
        if (dd === currdropdown) return
        dd.classList.remove("active");
    });

});


//this function fills the booking summarry

function fillBookingSummary(price, type) {
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
    document.getElementById("nb_of_children").value = num_of_child;
    document.getElementById("nb_of_adult").value = num_of_adu;
    document.getElementById("nb_of_rooms").value = nb_of_rooms;


    let cod1;
    let cid1;
    cod1 = (new Date(cod)).getTime();
    cid1 = (new Date(cid)).getTime();
    if (cod1 !== null && cid1 !== null) {
        const diffdays = Math.ceil(cod1 - cid1) / (1000 * 60 * 60 * 24);
        document.querySelectorAll(".nb-of-nights-span").forEach(ele => {
            ele.innerHTML = diffdays;
        });
    }
    document.querySelectorAll(".date-span").forEach(ele => {
        ele.innerHTML = cid + " - " + cod;
    });
    document.querySelectorAll(".guests-span").forEach(ele => {
        ele.innerHTML = num_of_adu.toString() + " ADULTS" + (num_of_child === 0 ? " " : " & " + num_of_child.toString() + " CHILDREN");
    });
    // document.querySelectorAll(".room-info-span").forEach(ele => {
    //     ele.innerHTML = nb_of_rooms.toString();
    // });
    if (price) {
        document.querySelectorAll(".total_price").forEach(ele => {
            console.log(parseInt(document.getElementById("nb-of-nights").innerHTML));
            ele.innerHTML = price * parseInt(document.getElementById("nb-of-nights").innerHTML);
        });
        document.getElementById("price").value = price * parseInt(document.getElementById("nb-of-nights").innerHTML);
    }
    if (type) {
        document.querySelectorAll(".room-info-span").forEach(ele => {
            ele.innerHTML = nb_of_rooms.toString() + "&times;" + type;
        });
    }


}
//this part is for the accordion 
document.querySelectorAll(".accordion-header").forEach((btn) => {
    btn.addEventListener("click", () => {
        const panel = btn.nextElementSibling;
        panel.classList.toggle("active");
        btn.classList.toggle("active");
    });
});


// booking info dropdown
const togglebutton = document.getElementsByClassName("seeInfo")[0];
const info = document.getElementsByClassName("bookingInfo")[0];
togglebutton.addEventListener('click', () => {
    info.classList.toggle("active");
})



// rooms

function getAvailableRooms() {
    // console.log(document.getElementById("check-in-calender").value);
    nb_of_ad = document.getElementById("room1-nb-of-adu-value").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText);
            document.querySelector('.rooms').innerHTML = this.responseText ? this.responseText : "<p style=\"font-size:40px\">NO ROOM FOUND<p>";
        }
    };
    xmlhttp.open("GET", "http://localhost/Roadstar-Hotel/pages/getRooms/" + nb_of_ad, true);
    xmlhttp.send();
}


function get_booking_room_number(btn, price, type) {
    inpu = document.getElementById("room_number_hidden");
    inpu.value = btn.id;
    console.log(type);
    fillBookingSummary(price, type);
    formStepNum++;
    updateFormStep();
    if (formStepNum !== 3) {
        updateProgressSteps();
    }
    window.scrollTo(0, 0);

}


function check_if_reservation_exists() {
    const cid_con = document.getElementById("check-in-calender").value;
    const cod_con = document.getElementById("check-out-calender").value;
    const chinb_con = document.getElementById("nb_of_children").value;
    const adunb_con = document.getElementById("nb_of_adult").value;
    const email_con = document.getElementById("email").value;


    let pass = false;

    let data = new FormData();
    data.append('cid', cid_con);
    data.append('cod', cod_con);
    data.append('children_nb', chinb_con);
    data.append('adult_nb', adunb_con);
    data.append('email', email_con);
    fetch('http://localhost/Roadstar-Hotel/pages/reservation_exists', {
        method: 'POST',
        body: data
    }).then((response) => {
        return response.text();
    }).then((text) => {
        if (text === "true") {
            Swal.fire({
                title: 'Are you sure?',
                text: "you have already a reservation with this informations",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('http://localhost/Roadstar-Hotel/pages/delete_the_reservation', {
                        method: 'POST',
                        body: data
                    }).then((res) => {
                        return res.text();
                    }).then((text) => {
                        if (text === "true") {
                            Swal.fire(
                                'Deleted!',
                                'Your reservation has been deleted.',
                                'success'
                            ).then(() => {
                                window.location.href = 'http://localhost/Roadstar-Hotel/';
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            })
                        }
                    })
                } else {
                    window.location.href = 'http://localhost/Roadstar-Hotel/';
                }
            });
        } else {
            test = true;
        }
    })
}