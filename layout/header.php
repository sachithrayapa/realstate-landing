<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/tailwind/output.css">
    <title>Lark Homes</title>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</head>
<!-- component -->
<!-- component -->

<body>
    <nav class="container w-full lg:pl-44 mt-5 lg:mb-10 mb-2 lg:flex items-center z-10 justify-start font-serif">
        <div class="flex justify-between items-center ">
            <span>
                <img src="../assets/img/header-logo.png" class="inline ml-3 lg:ml-0" alt="">
            </span>
            <span class="text-3xl font-bold cursor-pointer lg:hidden block mr-3"><ion-icon name="menu-outline"
                    onclick="Burger(this)"></ion-icon></span>

        </div>
        <ul class="lg:pl-24 pl-6 lg:flex items-center text-xl pt-5 lg:pt-0 z-[-1] lg:opacity-100 opacity-0">
            <li><a href="#" class="mx-10">Home</a></li>
            <li class="relative">
                <button class="mx-10 my-3 lg:my-0" type="button" class="" id="menu-button" aria-expanded="false"
                    aria-haspopup="true">
                    Listing
                </button>
                <div class="lg:origin-top-right absolute  mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                    id="menu-items" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Action</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Another action</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-2">Something else here</a>
                    </div>
                </div>
            </li>
            <li><a href="#" class="mx-10">Services</a></li>
            <li class="relative">
                <button class="mx-10 my-3 lg:my-0" type="button" id="menu-button2" aria-expanded="false"
                    aria-haspopup="true">
                    Blog
                </button>
                <div class="origin-top-right absolute  mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                    id="menu-items2" role="menu" aria-orientation="vertical" aria-labelledby="menu-button2"
                    tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Travel</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Food</a>
                    </div>
                </div>
            </li>
            <li><a href="#" class="mx-10">About</a></li>
            <li class="mt-3 lg:my-0"><a href="#" class="mx-10">Contact Us</a></li>

            <li class="lg:relative">
                <button class="mx-10 my-3 lg:my-0" type="button" id="menu-button3" aria-expanded="false"
                    aria-haspopup="true">
                    Page
                </button>
                <div class="origin-top-right absolute  mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                    id="menu-items3" role="menu" aria-orientation="vertical" aria-labelledby="menu-button3"
                    tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Page1</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Page1</a>
                    </div>
                </div>
            </li>
            <span class="lg:right-44 mx-10 lg:mx-0 -mt-2 lg:my-0 absolute">
                <button class="bg-blue-800 text-white px-8 lg:py-3 py-1 rounded-full">Get a quote</button>
            </span>
        </ul>
    </nav>

    <!-- hamburger -->
    <script>
        function Burger(e) {
            let list = document.querySelector('ul');
            e.name === 'menu-outline' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu-outline", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
    </script>

    <script>
        const button = document.getElementById('menu-button');
        const menu = document.getElementById('menu-items');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

    <script>
        const button2 = document.getElementById('menu-button2');
        const menu2 = document.getElementById('menu-items2');

        button2.addEventListener('click', () => {
            menu2.classList.toggle('hidden');
        });
    </script>

    <script>
        const button3 = document.getElementById('menu-button3');
        const menu3 = document.getElementById('menu-items3');

        button3.addEventListener('click', () => {
            menu3.classList.toggle('hidden');
        });
    </script>

</body>

</html>