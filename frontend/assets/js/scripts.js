document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const servicesMobileToggle = document.getElementById(
    "services-mobile-toggle"
  );
  const servicesMobileMenu = document.getElementById("services-mobile-menu");

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }

  if (servicesMobileToggle && servicesMobileMenu) {
    servicesMobileToggle.addEventListener("click", () => {
      servicesMobileMenu.classList.toggle("hidden");
    });
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        // Close mobile menu if open
        if (mobileMenu && !mobileMenu.classList.contains("hidden")) {
          mobileMenu.classList.add("hidden");
        }

        // Scroll to target
        window.scrollTo({
          top: targetElement.offsetTop - 80, // Offset for fixed header
          behavior: "smooth",
        });
      }
    });
  });

  // Form submission handling
  const appointmentForm = document.getElementById("appointment-form");
  if (appointmentForm) {
    appointmentForm.addEventListener("submit", (e) => {
      e.preventDefault();

      // Validate form
      let isValid = true;
      const requiredFields = ["name", "email", "phone", "date", "service"];

      requiredFields.forEach((field) => {
        const input = document.getElementById(field);
        if (input && !input.value.trim()) {
          isValid = false;
          input.classList.add("border-red-500");
          input.classList.add("bg-red-50");
        } else if (input) {
          input.classList.remove("border-red-500");
          input.classList.remove("bg-red-50");
        }
      });

      if (isValid) {
        // Simulate form submission
        const submitButton = appointmentForm.querySelector(
          'button[type="submit"]'
        );
        if (submitButton) {
          const originalText = submitButton.innerHTML;
          submitButton.disabled = true;
          submitButton.innerHTML =
            '<span class="flex items-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Processing...</span>';

          // Simulate API call
          setTimeout(() => {
            // Reset form
            appointmentForm.reset();

            // Show success message
            const successMessage = document.createElement("div");
            successMessage.className =
              "bg-green-50 border border-green-200 text-green-800 rounded-md p-4 mt-4";
            successMessage.innerHTML =
              '<div class="flex"><div class="flex-shrink-0"><svg class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div><div class="ml-3"><p class="text-sm font-medium">Thank you! Your appointment request has been submitted. We will contact you shortly to confirm your appointment.</p></div></div>';

            appointmentForm.appendChild(successMessage);

            // Reset button
            submitButton.disabled = false;
            submitButton.innerHTML = originalText;

            // Remove success message after 5 seconds
            setTimeout(() => {
              successMessage.remove();
            }, 5000);
          }, 1500);
        }
      } else {
        // Show error message
        const errorMessage = document.createElement("div");
        errorMessage.className =
          "bg-red-50 border border-red-200 text-red-800 rounded-md p-4 mt-4";
        errorMessage.innerHTML =
          '<div class="flex"><div class="flex-shrink-0"><svg class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div><div class="ml-3"><p class="text-sm font-medium">Please fill in all required fields.</p></div></div>';

        // Remove any existing error messages
        const existingError = appointmentForm.querySelector(".bg-red-50");
        if (existingError) {
          existingError.remove();
        }

        appointmentForm.appendChild(errorMessage);

        // Remove error message after 3 seconds
        setTimeout(() => {
          errorMessage.remove();
        }, 3000);
      }
    });
  }

  // Sticky header effect
  const header = document.querySelector("header");
  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        header.classList.add("shadow-md");
      } else {
        header.classList.remove("shadow-md");
      }
    });
  }

  // Scroll reveal animation
  const revealElements = document.querySelectorAll(".scroll-reveal");

  const revealOnScroll = () => {
    for (let i = 0; i < revealElements.length; i++) {
      const element = revealElements[i];
      const elementTop = element.getBoundingClientRect().top;
      const elementVisible = 150;

      if (elementTop < window.innerHeight - elementVisible) {
        setTimeout(() => {
          element.classList.add("revealed");
        }, element.dataset.delay || 0);
      }
    }
  };

  window.addEventListener("scroll", revealOnScroll);
  window.addEventListener("load", revealOnScroll);
});
