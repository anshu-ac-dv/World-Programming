<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="text-black-900 body-font bg-blue-800">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row bg-white items-center fixed shadow-lg">
            <a class="flex title-font font-medium items-center text-blue-900 mb-4 md:mb-0" href="index.php">
            <span class="ml-3 text-xl cursor-pointer">WorldProgramming</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 cursor-pointer" href="index.php">Home</a>
            <a class="mr-5 cursor-pointer" href="Languages.php">Languages</a>
            <a class="mr-5 cursor-pointer" href="Suggestion.php">My Suggestions</a>
            <a class="mr-5 cursor-pointer" href="Blog.php">Blogs</a>
            <a class="mr-5 cursor-pointer" href="Contact.php">Contac Us</a>
            <a class="mr-5 cursor-pointer" href="WWM.php">Work With Me</a>
            <a class="mr-5 cursor-pointer" href="About.php">About Us</a>
            </nav>
            <a href="Logout.php">
            <button class="inline-flex items-center text-white  bg-red-600 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-600 rounded text-base mt-4 md:mt-0">Logout
            </button>
            </a>
        </div>
    </header>
</body>
</html>