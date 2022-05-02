
const myforms = [...document.getElementsByClassName("myform")];
myforms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(form.action, {
                    method: 'POST'
                }).then((response) => {
                    return response.text();
                }).then((text) => {
                    if (text === "true") {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            window.location.reload();
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'foreign key problem!',
                        }).then(() => {
                            window.location.reload();
                        })
                    }
                }).catch((e) => {
                    console.error(e);
                })
            }
        });
    })
});
