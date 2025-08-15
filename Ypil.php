<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - [Your Name Here]</title>
    <!-- Tailwind CSS CDN for easy styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8; /* Light blue-gray background */
            color: #334155; /* Darker text color */
        }
        /* Custom styles for a more polished look */
        .card {
            background-color: #ffffff;
            border-radius: 0.75rem; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(255, 7, 7, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08); /* Subtle shadow */
            padding: 2.5rem; /* Ample padding */
        }
        .gradient-text {
            background: linear-gradient(90deg, #da3535ff, #0bc1c7ff); /* Purple to Indigo */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-primary {
            background: linear-gradient(90deg, #e54646ff, #1a9eebff);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: transform 0.2s ease-in-out;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center py-12 px-4 sm:px-6 lg:px-8">

    <?php
        // PHP variables for dynamic content
        $myName = "John Francis J. Ypil"; 
        $myTagline = "Could be Someone | Might be someone | I really don't know what am I actually";
        $myBio = "Hello! I'm " . $myName . ", a 3rd Year dedicated BSIT Student.";
        $mySkills = ["None"];
        $myContactEmail = "your.email@example.com"; //contact email
        $myFacebook = "https://www.facebook.com/john.ypil.2025"; //Facebook URL
        $myGitHub = "https://github.com/LipyCodes"; //GitHub URL
    ?>

    <!-- Main Container -->
    <div class="max-w-4x1 w-full space-y-12">

        <!-- Header Section -->
        <header class="text-center">
            <h1 class="text-6xl font-extrabold gradient-text leading-tight mb-4">
                Hi, I'm <?php echo $myName; ?>!
            </h1>
            <p class="text-xl text-gray-600 font-medium">
                <?php echo $myTagline; ?>
            </p>
        </header>

        
        <section id="about" class="card">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">About Me</h2>
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
               
            <div class="flex-shrink-0 mb-8 md:mb-0">
                    <img src="monke.jpeg" alt="monke.jpeg" class="w-48 h-48 rounded-full object-cover shadow-lg border-4 border-indigo-500">
                </div>
                <p class="text-1g text-gray-700 leading-relaxed text-center md:text-left">
                    <?php echo $myBio; ?>
                </p>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="card">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">My Skills</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <?php foreach ($mySkills as $skill): ?>
                    <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-4 py-2 rounded-full shadow-md transition transform hover:-translate-y-1 hover:scale-105">
                        <?php echo $skill; ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Call to Action / Contact Section -->
        <section id="contact" class="card text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Let's Connect!</h2>
            <p class="text-lg text-gray-700 mb-8">
                I'm always open to new opportunities and collaborations. Feel free to reach out!
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="mailto:<?php echo $myContactEmail; ?>" class="btn-primary flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-9 13h9a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Email Me
                </a>
                <a href="<?php echo $myFacebook; ?>" target="_blank" rel="noopener noreferrer" class="btn-primary flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38-1.11-2.5-2.48-2.5zM.002 9h4.96v15h-4.96zM22.238 9c-.333 0-.666.039-.999.098v-.098c-.14-.029-.28-.059-.42-.088l-1.07-1.07c-.45-.45-1.05-.69-1.69-.69-.97 0-1.87.52-2.35 1.35-.48.83-.48 1.83 0 2.66.48.83 1.38 1.35 2.35 1.35h.001c.64 0 1.24-.24 1.69-.69l1.07-1.07c.14-.029.28-.059.42-.088v.098c.333.059.666.098.999.098h.001c.97 0 1.87-.52 2.35-1.35.48-.83.48-1.83 0-2.66-.48-.83-1.38-1.35-2.35-1.35zM20 7.375c.182-.284.417-.506.634-.679.524-.413 1.132-.696 1.821-.696 1.45 0 2.545 1.134 2.545 2.545 0 .736-.312 1.4-.813 1.865-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-1.45 0-2.545-1.134-2.545-2.545 0-.736.312-1.4.813-1.865.217-.173.452-.395.634-.679zM12 9c-1.45 0-2.545 1.134-2.545 2.545 0 .736.312 1.4.813 1.865.349.32.767.56 1.229.7-.015.006-.029.012-.044.018l.044-.018c-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-1.45 0-2.545-1.134-2.545-2.545 0-.736.312-1.4.813-1.865.217-.173.452-.395.634-.679zM18 9c-1.45 0-2.545 1.134-2.545 2.545 0 .736.312 1.4.813 1.865.349.32.767.56 1.229.7-.015.006-.029.012-.044.018l.044-.018c-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-1.45 0-2.545-1.134-2.545-2.545 0-.736.312-1.4.813-1.865.217-.173.452-.395.634-.679zM6 9c-1.45 0-2.545 1.134-2.545 2.545 0 .736.312 1.4.813 1.865.349.32.767.56 1.229.7-.015.006-.029.012-.044.018l.044-.018c-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-1.45 0-2.545-1.134-2.545-2.545 0-.736.312-1.4.813-1.865.217-.173.452-.395.634-.679zM15 9c-1.45 0-2.545 1.134-2.545 2.545 0 .736.312 1.4.813 1.865.349.32.767.56 1.229.7-.015.006-.029.012-.044.018l.044-.018c-.349.32-.767.56-1.229.7-.015.006-.029.012-.044.018l.044-.018c-1.45 0-2.545-1.134-2.545-2.545 0-.736.312-1.4.813-1.865.217-.173.452-.395.634-.679z"></path></svg>
                    Facebook
                </a>
                <a href="<?php echo $myGitHub; ?>" target="_blank" rel="noopener noreferrer" class="btn-primary flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.865-.013-1.698-2.782.605-3.37-1.34-3.37-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.618.069-.607.069-.607 1.004.072 1.531 1.032 1.531 1.032.892 1.528 2.341 1.085 2.91.829.091-.643.35-1.085.637-1.334-2.22-.253-4.555-1.113-4.555-4.949 0-1.092.39-1.988 1.029-2.686-.103-.253-.446-1.27-.099-2.64 0 0 .84-.27 2.75 1.022A9.606 9.606 0 0112 5.042c.85.004 1.704.113 2.504.337 1.909-1.292 2.747-1.022 2.747-1.022.348 1.37.005 2.387-.099 2.64.64.698 1.028 1.594 1.028 2.686 0 3.845-2.338 4.691-4.562 4.935.359.309.678.917.678 1.855 0 1.336-.012 2.419-.012 2.747 0 .268.18.579.688.481C21.137 20.177 24 16.42 24 12.017 24 6.484 19.522 2 14 2h-2z" clip-rule="evenodd"></path></svg>
                    GitHub
                </a>
            </div>
        </section>

    </div>

    <!-- Footer Section -->
    <footer class="mt-12 text-center text-gray-500 text-sm">
        <p>&copy; <?php echo date("Y"); ?> <?php echo $myName; ?>. All rights reserved.</p>
    </footer>

</body>
</html>
