document.addEventListener("DOMContentLoaded", () => {
  const button = document.getElementById("clickMe");
  const message = document.getElementById("message");
  
  if (button) {
    button.addEventListener("click", () => {
      message.textContent = "Button clicked! GitHub Actions CI is watching 👀";
    });
  }
  
  const form = document.querySelector("form");
  if (form) {
    form.addEventListener("submit", (e) => {
      const name = document.getElementById("name");
      const email = document.getElementById("email");
      const messageField = document.getElementById("message");
      
      if (!name.value.trim()) {
        alert("Please enter your name");
        e.preventDefault();
        name.focus();
        return;
      }
      
      if (!email.value.trim()) {
        alert("Please enter your email");
        e.preventDefault();
        email.focus();
        return;
      }
      
      if (!messageField.value.trim()) {
        alert("Please enter a message");
        e.preventDefault();
        messageField.focus();
        return;
      }
      
      console.log("Form validation passed, submitting...");
    });
  }
});
