"use strict";

const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

window.addEventListener("load", () => document.forms.namedItem("login-form").addEventListener("submit", function(evt) {
    if (!emailRegex.test(this.elements.namedItem("mail").value)) {
        evt.preventDefault();
        alert("Please enter a valid email address");
        this.reset();
        return;
    }

    if (!passRegex.test(this.elements.namedItem("pass").value)) {
        evt.preventDefault();
        const msg1 = "Please enter a password of at least 8 characters,";
        const msg2 = "at least one uppercase letter, one lowercase letter,";
        const msg3 = "one number and one special character ( @$!%*?& ).";
        alert(`${msg1}\n${msg2}\n${msg3}`);
        this.reset();
        return;
    }
}));
