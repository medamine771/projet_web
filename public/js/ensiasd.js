// Attendre que le DOM soit chargé
document.addEventListener("DOMContentLoaded", () => {
  // Éléments DOM
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const currentYearElement = document.getElementById("current-year");
  const contactForm = document.getElementById("contact-form");
  const signinButton = document.getElementById("signin-button");
  const signupButton = document.getElementById("signup-button");
  const signinMobile = document.getElementById("signin-mobile");
  const signupMobile = document.getElementById("signup-mobile");
  const signinModal = document.getElementById("signin-modal");
  const signupModal = document.getElementById("signup-modal");
  const closeModalButtons = document.querySelectorAll(".close-modal");
  const switchToSignup = document.getElementById("switch-to-signup");
  const switchToSignin = document.getElementById("switch-to-signin");
  const signinForm = document.getElementById("signin-form");
  const signupForm = document.getElementById("signup-form");
  const toastContainer = document.getElementById("toast-container");
  
  // Éléments pour le thème
  const themeToggle = document.getElementById("theme-toggle");
  const themeToggleMobile = document.getElementById("theme-toggle-mobile");
  const themeIcon = themeToggle ? themeToggle.querySelector("i") : null;
  const themeIconMobile = themeToggleMobile ? themeToggleMobile.querySelector("i") : null;
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

  // Définir l'année courante dans le footer
  if (currentYearElement) {
      currentYearElement.textContent = new Date().getFullYear();
  }

  // Fonction pour définir le thème
  function setTheme(theme) {
      if (theme === "dark") {
          document.body.classList.add("dark");
          localStorage.setItem("theme", "dark");
          if (themeIcon) {
              themeIcon.classList.remove("fa-sun");
              themeIcon.classList.add("fa-moon");
          }
          if (themeIconMobile) {
              themeIconMobile.classList.remove("fa-sun");
              themeIconMobile.classList.add("fa-moon");
          }
      } else {
          document.body.classList.remove("dark");
          localStorage.setItem("theme", "light");
          if (themeIcon) {
              themeIcon.classList.remove("fa-moon");
              themeIcon.classList.add("fa-sun");
          }
          if (themeIconMobile) {
              themeIconMobile.classList.remove("fa-moon");
              themeIconMobile.classList.add("fa-sun");
          }
      }
  }

  // Vérifier le thème enregistré ou les préférences du système
  const savedTheme = localStorage.getItem("theme")
  if (savedTheme === "dark") {
    setTheme("dark")
  } else {
    // Mode clair par défaut
    setTheme("light")
  }

  // Gérer le clic sur le bouton de thème
  if (themeToggle) {
      themeToggle.addEventListener("click", () => {
          if (document.body.classList.contains("dark")) {
              setTheme("light");
          } else {
              setTheme("dark");
          }
      });
  }

  // Gérer le clic sur le bouton de thème mobile
  if (themeToggleMobile) {
      themeToggleMobile.addEventListener("click", (e) => {
          e.preventDefault();
          if (document.body.classList.contains("dark")) {
              setTheme("light");
          } else {
              setTheme("dark");
          }
          
          // Fermer le menu mobile après le changement de thème
          if (mobileMenu && !mobileMenu.classList.contains("hidden")) {
              mobileMenu.classList.add("hidden");
              const icon = mobileMenuButton.querySelector("i");
              if (icon) {
                  icon.classList.remove("fa-times");
                  icon.classList.add("fa-bars");
              }
          }
      });
  }

  // Écouter les changements de préférence du système
  prefersDarkScheme.addEventListener("change", (e) => {
      if (!localStorage.getItem("theme")) {
          if (e.matches) {
              setTheme("dark");
          } else {
              setTheme("light");
          }
      }
  });

  // Fonction pour créer et afficher un toast
  function showToast(type, title, message, duration = 3000) {
      const toast = document.createElement("div");
      toast.className = `toast toast-${type}`;
      
      toast.innerHTML = `
          <div class="toast-icon">
              <i class="fas fa-${type === "success" ? "check-circle" : "exclamation-circle"}"></i>
          </div>
          <div class="toast-content">
              <div class="toast-title">${title}</div>
              <div class="toast-message">${message}</div>
          </div>
          <button class="toast-close">
              <i class="fas fa-times"></i>
          </button>
      `;
      
      toastContainer.appendChild(toast);
      
      // Animation d'entrée
      setTimeout(() => {
          toast.classList.add("active");
      }, 10);
      
      // Fermer le toast au clic sur le bouton
      const closeButton = toast.querySelector(".toast-close");
      closeButton.addEventListener("click", () => {
          toast.classList.remove("active");
          setTimeout(() => {
              toast.remove();
          }, 300);
      });
      
      // Fermer automatiquement après la durée spécifiée
      setTimeout(() => {
          toast.classList.remove("active");
          setTimeout(() => {
              toast.remove();
          }, 300);
      }, duration);
  }

  // Gérer le menu mobile
  if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener("click", () => {
          mobileMenu.classList.toggle("hidden");
          
          // Changer l'icône
          const icon = mobileMenuButton.querySelector("i");
          if (mobileMenu.classList.contains("hidden")) {
              icon.classList.remove("fa-times");
              icon.classList.add("fa-bars");
          } else {
              icon.classList.remove("fa-bars");
              icon.classList.add("fa-times");
          }
      });
      
      // Fermer le menu quand on clique sur un lien
      const mobileLinks = mobileMenu.querySelectorAll("a");
      mobileLinks.forEach((link) => {
          link.addEventListener("click", function () {
              if (!this.id.includes("signin") && !this.id.includes("signup") && !this.id.includes("theme-toggle")) {
                  mobileMenu.classList.add("hidden");
                  const icon = mobileMenuButton.querySelector("i");
                  icon.classList.remove("fa-times");
                  icon.classList.add("fa-bars");
              }
          });
      });
  }

  // Gérer les modals
  function openModal(modal) {
      modal.classList.add("active");
  }

  function closeModal(modal) {
      modal.classList.remove("active");
  }

  function closeAllModals() {
      const modals = document.querySelectorAll(".modal");
      modals.forEach((modal) => {
          closeModal(modal);
      });
  }

  // Ouvrir les modals
  if (signinButton) {
      signinButton.addEventListener("click", () => {
          openModal(signinModal);
      });
  }

  if (signupButton) {
      signupButton.addEventListener("click", () => {
          openModal(signupModal);
      });
  }

  if (signinMobile) {
      signinMobile.addEventListener("click", (e) => {
          e.preventDefault();
          openModal(signinModal);
          mobileMenu.classList.add("hidden");
          const icon = mobileMenuButton.querySelector("i");
          icon.classList.remove("fa-times");
          icon.classList.add("fa-bars");
      });
  }

  if (signupMobile) {
      signupMobile.addEventListener("click", (e) => {
          e.preventDefault();
          openModal(signupModal);
          mobileMenu.classList.add("hidden");
          const icon = mobileMenuButton.querySelector("i");
          icon.classList.remove("fa-times");
          icon.classList.add("fa-bars");
      });
  }

  // Fermer les modals
  closeModalButtons.forEach((button) => {
      button.addEventListener("click", () => {
          closeAllModals();
      });
  });

  // Fermer les modals en cliquant à l'extérieur
  window.addEventListener("click", (e) => {
      if (e.target.classList.contains("modal")) {
          closeAllModals();
      }
  });

  // Basculer entre les modals
  if (switchToSignup) {
      switchToSignup.addEventListener("click", (e) => {
          e.preventDefault();
          closeModal(signinModal);
          openModal(signupModal);
      });
  }

  if (switchToSignin) {
      switchToSignin.addEventListener("click", (e) => {
          e.preventDefault();
          closeModal(signupModal);
          openModal(signinModal);
      });
  }

  // Gérer le formulaire de connexion
  if (signinForm) {
      signinForm.addEventListener("submit", (e) => {
          e.preventDefault();
          
          // Simuler l'envoi du formulaire
          const submitButton = signinForm.querySelector('button[type="submit"]');
          const originalText = submitButton.textContent;
          
          submitButton.textContent = "Connexion en cours...";
          submitButton.disabled = true;
          
          // Simuler un délai d'envoi
          setTimeout(() => {
              // Réinitialiser le formulaire
              signinForm.reset();
              
              // Fermer le modal
              closeModal(signinModal);
              
              // Afficher un message de succès
              showToast("success", "Connexion réussie", "Vous êtes maintenant connecté.");
              
              // Restaurer le bouton
              submitButton.textContent = originalText;
              submitButton.disabled = false;
          }, 1500);
      });
  }

  // Gérer le formulaire d'inscription
  if (signupForm) {
      signupForm.addEventListener("submit", (e) => {
          e.preventDefault();
          
          // Vérifier que les mots de passe correspondent
          const password = document.getElementById("signup-password").value;
          const confirmPassword = document.getElementById("signup-confirm-password").value;
          
          if (password !== confirmPassword) {
              showToast("error", "Erreur", "Les mots de passe ne correspondent pas.");
              return;
          }
          
          // Simuler l'envoi du formulaire
          const submitButton = signupForm.querySelector('button[type="submit"]');
          const originalText = submitButton.textContent;
          
          submitButton.textContent = "Inscription en cours...";
          submitButton.disabled = true;
          
          // Simuler un délai d'envoi
          setTimeout(() => {
              // Réinitialiser le formulaire
              signupForm.reset();
              
              // Fermer le modal
              closeModal(signupModal);
              
              // Afficher un message de succès
              showToast("success", "Inscription réussie", "Votre compte a été créé avec succès.");
              
              // Restaurer le bouton
              submitButton.textContent = originalText;
              submitButton.disabled = false;
          }, 1500);
      });
  }

  // Gérer le formulaire de contact
  if (contactForm) {
      contactForm.addEventListener("submit", (e) => {
          e.preventDefault();
          
          // Simuler l'envoi du formulaire
          const submitButton = contactForm.querySelector('button[type="submit"]');
          const originalText = submitButton.textContent;
          
          submitButton.textContent = "Envoi en cours...";
          submitButton.disabled = true;
          
          // Simuler un délai d'envoi
          setTimeout(() => {
              // Réinitialiser le formulaire
              contactForm.reset();
              
              // Afficher un message de succès
              showToast("success", "Message envoyé", "Votre message a été envoyé avec succès!");
              
              // Restaurer le bouton
              submitButton.textContent = originalText;
              submitButton.disabled = false;
          }, 1500);
      });
  }

  // Smooth scroll pour les liens d'ancrage
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
          if (
              this.getAttribute("href") !== "#" &&
              !this.id.includes("switch-to") &&
              !this.classList.contains("forgot-password") &&
              !this.id.includes("theme-toggle")
          ) {
              e.preventDefault();
              
              const targetId = this.getAttribute("href");
              const targetElement = document.querySelector(targetId);
              
              if (targetElement) {
                  window.scrollTo({
                      top: targetElement.offsetTop - 80,
                      behavior: "smooth",
                  });
              }
          }
      });
  });

  // Animation des statistiques
  function animateStats() {
      const statItems = document.querySelectorAll(".stat-number");
      
      statItems.forEach((item) => {
          const target = Number.parseInt(item.textContent.replace(/[^0-9]/g, ""));
          const suffix = item.textContent.replace(/[0-9]/g, "");
          let current = 0;
          const increment = Math.ceil(target / 50);
          const duration = 1500; // ms
          const stepTime = Math.floor(duration / (target / increment));
          
          item.textContent = "0" + suffix;
          
          const timer = setInterval(() => {
              current += increment;
              if (current >= target) {
                  item.textContent = target + suffix;
                  clearInterval(timer);
              } else {
                  item.textContent = current + suffix;
              }
          }, stepTime);
      });
  }

  // Observer pour déclencher l'animation quand la section est visible
  if ("IntersectionObserver" in window) {
      const aboutSection = document.querySelector(".about-stats");
      if (aboutSection) {
          const observer = new IntersectionObserver(
              (entries) => {
                  entries.forEach((entry) => {
                      if (entry.isIntersecting) {
                          animateStats();
                          observer.unobserve(entry.target);
                      }
                  });
              },
              { threshold: 0.5 }
          );
          
          observer.observe(aboutSection);
      }
  } else {
      // Fallback pour les navigateurs qui ne supportent pas IntersectionObserver
      setTimeout(animateStats, 1000);
  }

  // Ajouter une classe active aux liens de navigation lors du défilement
  const sections = document.querySelectorAll("section[id]");
  
  function highlightNavLinks() {
      const scrollPosition = window.scrollY + 100;
      
      sections.forEach((section) => {
          const sectionTop = section.offsetTop;
          const sectionHeight = section.offsetHeight;
          const sectionId = section.getAttribute("id");
          
          if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
              document.querySelectorAll(".nav-link").forEach((link) => {
                  link.classList.remove("active");
                  if (link.getAttribute("href") === "#" + sectionId) {
                      link.classList.add("active");
                  }
              });
              
              document.querySelectorAll(".mobile-nav-link").forEach((link) => {
                  link.classList.remove("active");
                  if (link.getAttribute("href") === "#" + sectionId) {
                      link.classList.add("active");
                  }
              });
          }
      });
  }
  
  window.addEventListener("scroll", highlightNavLinks);
});