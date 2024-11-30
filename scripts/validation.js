function nameGender() {
    const lastName = document.getElementById("lastName").value.trim();
    const firstName = document.getElementById("firstName").value.trim();
    const firstNameError = document.getElementById("firstNameError");
    const lastNameError = document.getElementById("lastNameError");

    let valid = true;
    const minCharacter = 2;

    // Reset previous error messages
    firstNameError.textContent = "";
    lastNameError.textContent = "";

    // Check if last name is of minimum 2 characters
    if (lastName.length < minCharacter) {
        lastNameError.textContent = "Last Name must be at least 2 characters.";
        valid = false;
    }

    // Check if first name is of minimum 2 characters
    if (firstName.length < minCharacter) {
        firstNameError.textContent = "First Name must be at least 2 characters.";
        valid = false;
    }

    const male = document.getElementById("male");
    const female = document.getElementById("female");

    if (!male.checked && !female.checked) {
        console.log("You have to select one gender.");
        valid = false;
    }

    return valid;
}

function emailValidation() {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = document.getElementById("email").value.trim();
    const emailError = document.getElementById("emailError");

    if (!emailRegex.test(email)) {

        emailError.textContent = "Your email address is not in correct format.";
        
    }

    return emailRegex.test(email);
}

function phoneValidation() {
    const phoneNumber = document.getElementById("phone").value.trim();
    const phoneRegex = /^\(?(\d{3})\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
    const phoneError = document.getElementById("phoneError");

    if (!phoneRegex.test(phoneNumber)) {
        phoneError.textContent = "Your phone number is not in correct format.";


        
    }
    return phoneRegex.test(phoneNumber);
}

function check(event) {
    event.preventDefault(); // Prevent default form submission

    let validity = true;

    // Validate name and gender
    if (!nameGender()) validity = false;

    // Validate email
    if (!emailValidation()) {
        console.log("Invalid email.");
        validity = false;
    }

    // Validate phone number
    if (!phoneValidation()) {
        console.log("Invalid phone number.");
        validity = false;
    }

    // Validate passwords
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();
    const minChar = 12;
    const strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    const passwordError = document.getElementById("passwordError")

    if (password.length < minChar) {
        // console.log("Password must be a minimum of 12 characters.");
        passwordError.textContent = "Password must be a minimum of 12 characters.";

        validity = false;
    }

    if (password !== confirmPassword) {
        // console.log("Passwords do not match.");
        passwordError.textContent = "Passwords do not match.";


        validity = false;
    }

    if (!strongPasswordRegex.test(password)) {
        console.log("Password is not strong enough.");
        passwordError.textContent = "Password is not strong enough.";
        

        validity = false;
    }

    // Submit form only if all validations pass
    if (validity) {
        console.log("Form submitted successfully!");
        event.target.submit(); // Manually trigger form submission
    }
}
