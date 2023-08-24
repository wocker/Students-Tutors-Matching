export default {
    showStatus: function (message, type = 'success', toast = true) {



        if (type == "success") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            if (toast) {
                Toast.fire({
                    icon: type,
                    title: message,
                })
            } else {
                Swal.fire({
                    icon: type,
                    title: message,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                })
            }
        }
        else if (type == "error") {

            Swal.fire({
                icon: type,
                title: message,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
            })


        }


    },

    showWarning: function (message, type = 'success', toast = true) {


        Swal.fire({
            title: 'Are you sure?',
            text: message,
            icon: type,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        })



    }
}
