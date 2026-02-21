<?php session_start(); ?><!doctype html>

<html class="dark" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Senior Designer &amp; Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#39FF14",
              "background-light": "#f5f6f8",
              "background-dark": "#0a0a0a",
              "surface-dark": "#161b22",
            },
            fontFamily: {
              display: ["Inter", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
          },
        },
      };
    </script>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 selection:bg-primary selection:text-white"
  >
    <div class="fixed inset-0 z-[-1] pointer-events-none bg-grid"></div>
    <!-- Navigation -->
    <nav
      class="fixed top-0 w-full z-50 glass-nav border-b border-slate-200 dark:border-slate-800"
    >
      <div
        class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between"
      >
        <div class="flex items-center gap-3">
         
          <span class="text-xl font-extrabold tracking-tight hidden sm:block"
            >Lazy <span class="text-black bg-yellow-500 p-1 rounded">coder</span></span
          >
        </div>
        <div class="hidden md:flex items-center gap-10">
          <a
            class="text-sm font-medium hover:text-primary transition-colors"
            href="#work"
            >Work</a
          >
          <a
            class="text-sm font-medium hover:text-primary transition-colors"
            href="#about"
            >About</a
          >
          <a
            class="text-sm font-medium hover:text-primary transition-colors"
            href="#services"
            >Services</a
          >
          <a
            class="text-sm font-medium hover:text-primary transition-colors"
            href="#contact"
            >Contact</a
          >
        </div>
        <div class="flex items-center gap-4">
          <button
            class="bg-primary hover:bg-primary/90 text-black px-6 py-2.5 rounded-lg text-sm font-bold transition-all transform active:scale-95 shadow-lg shadow-primary/40 shadow-primary/60"
          >
            Hire Me
          </button>
        </div>
      </div>
    </nav>
    <main class="relative pt-20">
      <!-- Hero Section -->
    <?php include 'hero.php'; ?>
      <!-- About Section -->
     <?php include 'about.php'; ?>
     <!-- Services Section -->
      <?php include 'service.php'; ?>
      <!-- Featured Work -->
     <?php include 'work.php'; ?>
      <!-- Contact Section -->
    <?php include 'contact.php'; ?>
    </main>
    <!-- Footer -->
    <footer class="py-12 border-t border-slate-200 dark:border-slate-800">
      <div
        class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6"
      >
        <p class="text-slate-500 text-sm">
          © 2024 Resty Gonzales. All rights reserved.
        </p>
        <div class="flex items-center gap-8">
          <a
            class="text-sm font-medium text-slate-500 hover:text-primary transition-colors"
            href="#"
            >Privacy Policy</a
          >
          <a
            class="text-sm font-medium text-slate-500 hover:text-primary transition-colors"
            href="#"
            >Terms of Service</a
          >
          <button
            class="flex items-center gap-2 text-primary font-bold text-sm neon-glow-primary"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
          >
            Back to Top
            <span class="material-symbols-outlined text-base">expand_less</span>
          </button>
        </div>
      </div>
    </footer>
    <script>
      window.addEventListener("mousemove", (e) => {
        const x = (e.clientX / window.innerWidth) * 100;
        const y = (e.clientY / window.innerHeight) * 100;
        document.documentElement.style.setProperty("--mouse-x", x + "%");
        document.documentElement.style.setProperty("--mouse-y", y + "%");
      });
    </script>
  </body>
</html>
