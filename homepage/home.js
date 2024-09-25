 // Function to scroll back to the top
      function scrollToTop() {
          window.scrollTo({
              top: 0,
              behavior: 'smooth'
          });
      }

      // Show the button when user scrolls down
      window.addEventListener('scroll', function() {
          const button = document.getElementById('back-to-top');
          if (window.scrollY > 200) {
              button.classList.add('show');
          } else {
              button.classList.remove('show');
          }
      });
