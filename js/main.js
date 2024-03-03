(function ($) {
  "use strict";

  // Dropdown on mouse hover
  $(document).ready(function () {
    function toggleNavbarMethod() {
      if ($(window).width() > 992) {
        $(".navbar .dropdown")
          .on("mouseover", function () {
            $(".dropdown-toggle", this).trigger("click");
          })
          .on("mouseout", function () {
            $(".dropdown-toggle", this).trigger("click").blur();
          });
      } else {
        $(".navbar .dropdown").off("mouseover").off("mouseout");
      }
    }
    toggleNavbarMethod();
    $(window).resize(toggleNavbarMethod);
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    center: true,
    autoplay: true,
    smartSpeed: 2000,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);

// Sample schedule data
const scheduleData = [
  { date: "2024-03-10", event: "Musical Performance", time: "7:00 PM" },
  { date: "2024-03-15", event: "Drama Play", time: "6:30 PM" },
  { date: "2024-03-20", event: "Comedy Show", time: "8:00 PM" },
  // Add more events as needed
];

// Function to populate the schedule
function populateSchedule() {
  const scheduleBody = document.getElementById("schedule-body");

  // Clear existing schedule data
  scheduleBody.innerHTML = "";

  // Iterate over the schedule data and create table rows
  scheduleData.forEach((event) => {
    const row = document.createElement("tr");
    row.innerHTML = `
            <td>${event.date}</td>
            <td>${event.event}</td>
            <td>${event.time}</td>
        `;
    scheduleBody.appendChild(row);
  });
}

// Call the function to populate the schedule
populateSchedule();
