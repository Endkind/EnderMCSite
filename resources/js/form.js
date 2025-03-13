// #region Form-Validation
function initializeFormValidation(form) {
    const formFields = form.querySelectorAll("[required]");
    const submitButton = form.querySelector(
        'button[type="submit"], input[type="submit"]'
    );

    const isValidEmail = (email) => {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    };

    const isMatchingField = (field, confirmationField) => {
        return field.value.trim() === confirmationField.value.trim();
    };

    const updateSubmitButton = () => {
        const isValid = Array.from(formFields).every((field) => {
            const value = field.value.trim();

            if (!value) return false;

            if (field.type === "email") return isValidEmail(value);

            const confirmationField = form.querySelector(
                `[name="${field.name}_confirmation"]`
            );
            if (confirmationField && !isMatchingField(field, confirmationField)) {
                return false;
            }

            return true;
        });

        if (submitButton) {
            submitButton.disabled = !isValid;
        }
    };

    form.addEventListener("input", updateSubmitButton);

    updateSubmitButton();
}

const forms = document.querySelectorAll("form");
forms.forEach(initializeFormValidation);
// #endregion

// #region Password
function togglePassword(id) {
    const input = document.getElementById(id);
    const icon = document.getElementById("icon-" + id);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    }
}

window.togglePassword = togglePassword;
// #endregion
