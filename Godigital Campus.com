<<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   GoDigitalCampus.com
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto">
  <header class="bg-blue-600 text-white p-4">
   <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-2xl font-bold">
     GoDigitalCampus.com
    </h1>
    <nav>
     <ul class="flex space-x-4">
      <li>
       <a class="hover:underline" href="#home">
        Home
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#services">
        Services
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#career">
        Grow with Us
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#contact">
        Contact
       </a>
      </li>
     </ul>
    </nav>
   </div>
  </header>
  <section class="bg-gray-100 p-8" id="home">
   <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">
     Welcome to GoDigitalCampus.com
    </h2>
    <p class="mb-4">
     BB's Godigitalcampus Private Limited is dedicated to providing top-notch digital solutions for educational institutions.
    </p>
    <img alt="A digital campus with students interacting with various digital devices" class="w-full h-auto mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/YDcQMl9BMI4jA9f6TtHhec9onCx4wyNAyBdl3QDoDhknVI8TA.jpg" width="600"/>
    <h3 class="text-2xl font-bold mb-2">
     About Us
    </h3>
    <p>
     We are a company committed to transforming educational experiences through innovative digital solutions. Our mission is to create a seamless and efficient digital environment for students and educators alike.
    </p>
   </div>
  </section>
  <section class="bg-white p-8" id="services">
   <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">
     Our Services
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
     <div class="bg-gray-100 p-4 rounded">
      <h3 class="text-2xl font-bold mb-2">
       My Digital Campus
      </h3>
      <img alt="A digital platform interface for managing campus activities" class="w-full h-auto mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/t5kmRPpeaX1BPqj0bDbmbwVTtHazLFbkAOe5SNoifULLrQ4nA.jpg" width="400"/>
      <p>
       My Digital Campus is an all-in-one platform designed to streamline campus management, enhance communication, and improve the overall educational experience.
      </p>
     </div>
     <div class="bg-gray-100 p-4 rounded">
      <h3 class="text-2xl font-bold mb-2">
       My ChatBox
      </h3>
      <img alt="A chat interface for students and educators to communicate" class="w-full h-auto mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/ABna67CZ9joNCN0AT7KsypKwgnC6h6v8dhJPZAZdTjmZFCfJA.jpg" width="400"/>
      <p>
       My ChatBox is a powerful communication tool that allows students and educators to interact seamlessly, share resources, and collaborate on projects in real-time.
      </p>
     </div>
    </div>
   </div>
  </section>
  <section class="bg-white p-8" id="career">
   <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">
     Grow with Us
    </h2>
    <form action="mailto:info@godigitalcampus.com" class="bg-white p-4 rounded shadow-md" enctype="multipart/form-data" method="post">
     <div class="mb-4">
      <label class="block text-gray-700" for="full-name-career">
       Full Name
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="full-name-career" name="Full Name" required="" type="text"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="email-career">
       Email
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="email-career" name="Email" required="" type="email"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="resume">
       Upload Resume
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="resume" name="Resume" required="" type="file"/>
     </div>
     <button class="bg-blue-600 text-white p-2 rounded" type="submit">
      Submit Resume
     </button>
    </form>
   </div>
  </section>
  <section class="bg-gray-100 p-8" id="contact">
   <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">
     Contact Us
    </h2>
    <form action="mailto:info@godigitalcampus.com" class="bg-white p-4 rounded shadow-md" enctype="text/plain" method="post">
     <div class="mb-4">
      <label class="block text-gray-700" for="full-name">
       Full Name
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="full-name" name="Full Name" required="" type="text"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="institution-name">
       Institution Name
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="institution-name" name="Institution Name" required="" type="text"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="address">
       Address
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="address" name="Address" required="" type="text"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="email">
       Email
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="email" name="Email" required="" type="email"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="phone-number">
       Phone Number
      </label>
      <input class="w-full p-2 border border-gray-300 rounded" id="phone-number" name="Phone Number" required="" type="tel"/>
     </div>
     <div class="mb-4">
      <label class="block text-gray-700" for="message">
       Message
      </label>
      <textarea class="w-full p-2 border border-gray-300 rounded" id="message" name="Message" required="" rows="4">
      </textarea>
     </div>
     <button class="bg-blue-600 text-white p-2 rounded" type="submit">
      Send Message
     </button>
    </form>
   </div>
  </section>
  <footer class="bg-blue-600 text-white p-4">
   <div class="container mx-auto text-center">
    <p>
     &copy; 2023 BB's Godigitalcampus Private Limited. All rights reserved.
    </p>
   </div>
  </footer>
 </body>
</html>