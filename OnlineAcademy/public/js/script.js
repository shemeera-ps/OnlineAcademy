console.log("hello");

const navLinks=document.querySelector('.nav-links');
const menu=document.getElementById('menu-btn');
const close=document.getElementById('menu-close');

menu.addEventListener('click',(e)=>{
    e.preventDefault();
    navLinks.style.right='0';
})
close.addEventListener('click',(e)=>{
    e.preventDefault();
    navLinks.style.right='-220px';
})


// Function to update the counter
function updateCounter() {
    // Set the date to count down 18 days ahead of current date
    const countDownDate=new Date();
    countDownDate.setDate(countDownDate.getDate() + 18 );
    countDownDate.setHours(23, 59, 59, 999);

    // Update the counter every 1 second
    const x = setInterval(function() {
      // Get the current date and time
      const now= new Date().getTime();

      // Calculate the remaining time
      const distance = countDownDate - now;

      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(distance / (1000*60*60*24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the countdown
      document.getElementById("days").innerHTML = days + "<br>Days";
      document.getElementById("hours").innerHTML = hours + "<br>Hours";
      document.getElementById("minutes").innerHTML = minutes + "<br>Minutes";
      document.getElementById("seconds").innerHTML = seconds + "<br>Seconds";

      // If the countdown is over, display a message
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("days").innerHTML = "EXPIRED";
        document.getElementById("hours").innerHTML = "";
        document.getElementById("minutes").innerHTML = "";
        document.getElementById("seconds").innerHTML = "";
      }
    }, 500);
  }

  // Call the function when the page loads
  window.onload = updateCounter;
