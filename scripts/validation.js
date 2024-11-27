// function checkValidty(){
//         event.preventDefault(); // Prevent form submission to handle validation first
    
//         const lastName = document.getElementById("lastName").value.trim();
//         const firstName = document.getElementById("firstName").value.trim();
//         // console.log(lastName)
//         // console.log(typeof(lastName))
//         // console.log(lastName.length)
    
//         let valid = true;
//         let minCharacter = 2
    
//         // Check if last name is of minimum 2 character
//         if (lastName.length < minCharacter) {
//             console.log("Last Name character should be of minimum 2 or more than 2 characters");
//             valid = false;
//         }
    
//         // Check if first name is of minimum 2 character
//         if (lastName.length < minCharacter) {
//             console.log("Last Name character should be of minimum 2 or more than 2 characters");
//             valid = false;
//         }
    
//         // if (valid) {
//         //     console.log("Form submitted successfully!");
//         //     // Form submission can proceed here
//         //     // event.target.submit();
//         // }
    
//         const male = document.getElementById("male");
//         const female = document.getElementById("female");
       
//         if (!male.checked && !female.checked) {
//             console.log("you have to select one gender");
//             valid = false;
            
//         }
//         const gender = male.checked? male.value:female.value;
//         console.log(gender);
    
    
// }

// function emailValidation(event){
//     event.preventDefault();

//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//     const email = document.getElementById("email").value.trim()
//     // console.log(email);

//     const test = emailRegex.test(email);
//     if (test) {
//         console.log(email)
        
//     }else{
//         console.log("email is not valid");
//     }



// }

// function phoneValidation(event){
//     event.preventDefault();
//     const phoneNumber = document.getElementById("phone").value.trim();
//     console.log(phoneNumber);

//     // Updated regex without conditional groups
//     const phoneRegex = /^\(?(\d{3})\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
//     const testPhone = phoneRegex.test(phoneNumber);

//     if (testPhone) {
//         console.log("valid");
//     } else {
//         console.log("invalid");
//     }
// }

function check(event){
    event.preventDefault(); // Prevent form submission to handle validation first

    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();

    const minChar = 12;
    const strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validate password length
    if (password.length < minChar) {
        console.log("Password must be a minimum of 12 characters.");
        return false; // Prevent form submission
    }

    // Validate if passwords match
    if (password !== confirmPassword) {
        console.log("Passwords do not match.");
        return false; // Prevent form submission
    }

    // Validate strong password using regex
    const valid = checkR(strongPasswordRegex, password);
    if (valid) {
        console.log("Password is valid.");
        event.target.submit();  // Manually trigger form submission

        return true; // This will trigger form submission
    } else {
        console.log("Password is not strong enough.");
        return false; // Prevent form submission
    }
}

function checkR(strongPasswordRegex, password){
    return strongPasswordRegex.test(password); // Return true if the password matches the regex
}
