class FormValidator {
    constructor(form, fields) {
        this.form = form
        this.fields = fields
    }

    initialize() {
        this.validateOnEntry()
        this.validateOnSubmit()
    }

    validateOnSubmit() {
        let self = this

        this.form.addEventListener('submit', event => {
            event.preventDefault()
            self.fields.forEach(field => {
                const input = document.querySelector(`#${field}`)
                self.validateFields(input)
            })
        })
    }

    validateOnEntry() {
        let self = this
        this.fields.forEach(field => {
            const input = document.querySelector(`#${field}`)

            input.addEventListener('input', () => {
                self.validateFields(input)
            })
        })
    }

    validateFields(field) {

        // Check presence of values
        if (field.value.trim() === "") {
            this.setStatus(field, `${field.previousElementSibling.innerText} tidak boleh kosong`, "error")
        } else {
            this.setStatus(field, null, "success")
        }

        // check for a valid email address
        if (field.type === "email") {
            const re = /\S+@\S+\.\S+/
            if (re.test(field.value)) {
                this.setStatus(field, null, "success")
            } else {
                this.setStatus(field, "Harap masukkan email yang valid", "error")
            }
        }

        if (field.type === "password") {
            if (field.value.length < 8) {
                this.setStatus(field, "Password setidaknya terdiri dari 8 karakter", "error")
            } else {
                this.setStatus(field, null, "success")
            }
        }

        if (field.id === "no_telp") {
            const regex = new RegExp(/^[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{5,8})(?: *x(\d+))?$/);
            const regex2 = new RegExp(/^[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4,8})(?: *x(\d+))?$/);
            if (regex2.test(field.value)) {
                this.setStatus(field, null, "success")
            } else {
                this.setStatus(field, "Harap masukkan nomor telepon yang valid", "error")
            }
        }

        // Password confirmation edge case
        if (field.id === "password_confirm") {
            const passwordField = document.querySelector('#password')
    
            if (field.value.trim() == "") {
                this.setStatus(field, "Konfirmasi password wajib diisi", "error")
            } else if (field.value != passwordField.value) {
                this.setStatus(field, "Konfirmasi password tidak cocok dengan password", "error")
            } else {
                this.setStatus(field, null, "success")
            }
        }
    }

    setStatus(field, message, status) {
        const successIcon = field.parentElement.querySelector('.icon-success')
        const errorIcon = field.parentElement.querySelector('.icon-error')
        const errorMessage = field.parentElement.querySelector('.error-message')

        if (status === "success") {
            if (errorIcon) {
                errorIcon.classList.add('hidden')
            }

            if (errorMessage) {
                errorMessage.innerText = ""
            }
            successIcon.classList.remove('hidden')
            field.classList.remove('input-error')
        }

        if (status === "error") {
            if (successIcon) {
                successIcon.classList.add('hidden')
            }

            field.parentElement.querySelector('.error-message').innerText = message
            errorIcon.classList.remove('hidden')
            field.classList.add('input-error')
        }
    }
}

const form = document.querySelector('.form-reg')
const fields = ["email", "no_telp", "nama", "username", "password", "password_confirm"]

const validator = new FormValidator(form, fields)
validator.initialize()