//contact
function sendMessage() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const subject = document.getElementById("subject").value;
  const message = document.getElementById("message").value;

  const url =
    "https://api.whatsapp.com/send?phone=6281336464103&text=%F0%9F%91%8B%20Hello%20_Mohammad%20Affan%20Shofi_%2C%0A%0AI'm%3A%20*" +
    name +
    "**%0AEmail%3A%20*" +
    email +
    "*%0ASubject%3A%20*" +
    subject +
    "*%0AMessage%3A%20*" +
    message +
    "*%0A%0AThank%20You!%20%F0%9F%99%8F";

  window.open(url);
}
