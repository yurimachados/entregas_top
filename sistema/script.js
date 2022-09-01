


// Toast showup

const toastTrigger = document.getElementById('#btn-createOrder')
const toastLiveExample = document.getElementById('#CreateConfirm')
if (toastTrigger) {
    toastTrigger.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
    })
}