<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Section 1 -->
    <section class="w-full px-8 text-gray-700 bg-white">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <div class="relative flex flex-col md:flex-row">
                <a href="#_"
                    class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                    <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">AI<span
                            class="text-indigo-600">.</span></span>
                </a>
                <nav
                    class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Features</a>
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                </nav>
            </div>

            <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                <a href="#"
                    class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                    Sign in
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Sign up
                </a>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div
                        class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Useful Tools to</span>
                            <span class="block text-indigo-600 xl:inline">Help You Build Faster.</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been
                            easier to build beautiful websites that convey your message and tell your story.</p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                                Try It Free
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                            <a href="#_"
                                class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img
                            src="https://images.unsplash.com/photo-1498049860654-af1a5c566876?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="container mx-auto px-4 space-y-6 bg-slate-50 py-8 md:py-12 lg:py-20">

        <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">

            <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Features</h2>

            <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
                The product can personalize user experiences by understanding individual preferences and tailoring
                recommendations or content based on user behavior and historical data.
            </p>

        </div>

        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" class="h-12 w-12 fill-current">
                        <path
                            d="M11.572 0c-.176 0-.31.001-.358.007a19.76 19.76 0 0 1-.364.033C7.443.346 4.25 2.185 2.228 5.012a11.875 11.875 0 0 0-2.119 5.243c-.096.659-.108.854-.108 1.747s.012 1.089.108 1.748c.652 4.506 3.86 8.292 8.209 9.695.779.25 1.6.422 2.534.525.363.04 1.935.04 2.299 0 1.611-.178 2.977-.577 4.323-1.264.207-.106.247-.134.219-.158-.02-.013-.9-1.193-1.955-2.62l-1.919-2.592-2.404-3.558a338.739 338.739 0 0 0-2.422-3.556c-.009-.002-.018 1.579-.023 3.51-.007 3.38-.01 3.515-.052 3.595a.426.426 0 0 1-.206.214c-.075.037-.14.044-.495.044H7.81l-.108-.068a.438.438 0 0 1-.157-.171l-.05-.106.006-4.703.007-4.705.072-.092a.645.645 0 0 1 .174-.143c.096-.047.134-.051.54-.051.478 0 .558.018.682.154.035.038 1.337 1.999 2.895 4.361a10760.433 10760.433 0 0 0 4.735 7.17l1.9 2.879.096-.063a12.317 12.317 0 0 0 2.466-2.163 11.944 11.944 0 0 0 2.824-6.134c.096-.66.108-.854.108-1.748 0-.893-.012-1.088-.108-1.747-.652-4.506-3.859-8.292-8.208-9.695a12.597 12.597 0 0 0-2.499-.523A33.119 33.119 0 0 0 11.573 0zm4.069 7.217c.347 0 .408.005.486.047a.473.473 0 0 1 .237.277c.018.06.023 1.365.018 4.304l-.006 4.218-.744-1.14-.746-1.14v-3.066c0-1.982.01-3.097.023-3.15a.478.478 0 0 1 .233-.296c.096-.05.13-.054.5-.054z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">Next.js 13</h3>
                        <p class="text-sm text-muted-foreground">App dir, Routing, Layouts, Loading UI and API routes.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" class="h-12 w-12 fill-current">
                        <path
                            d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38a2.167 2.167 0 0 0-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44a23.476 23.476 0 0 0-3.107-.534A23.892 23.892 0 0 0 12.769 4.7c1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442a22.73 22.73 0 0 0-3.113.538 15.02 15.02 0 0 1-.254-1.42c-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87a25.64 25.64 0 0 1-4.412.005 26.64 26.64 0 0 1-1.183-1.86c-.372-.64-.71-1.29-1.018-1.946a25.17 25.17 0 0 1 1.013-1.954c.38-.66.773-1.286 1.18-1.868A25.245 25.245 0 0 1 12 8.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933a25.952 25.952 0 0 0-1.345-2.32zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493a23.966 23.966 0 0 0-1.1-2.98c.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98a23.142 23.142 0 0 0-1.086 2.964c-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39a25.819 25.819 0 0 0 1.341-2.338zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143a22.005 22.005 0 0 1-2.006-.386c.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295a1.185 1.185 0 0 1-.553-.132c-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">React 18</h3>
                        <p class="text-sm">Server and Client Components. Use hook.</p>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" class="h-12 w-12 fill-current">
                        <path
                            d="M0 12C0 5.373 5.373 0 12 0c4.873 0 9.067 2.904 10.947 7.077l-15.87 15.87a11.981 11.981 0 0 1-1.935-1.099L14.99 12H12l-8.485 8.485A11.962 11.962 0 0 1 0 12Zm12.004 12L24 12.004C23.998 18.628 18.628 23.998 12.004 24Z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">Database</h3>
                        <p class="text-sm text-muted-foreground">ORM using Prisma and deployed on PlanetScale.</p>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" class="h-12 w-12 fill-current">
                        <path
                            d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">Components</h3>
                        <p class="text-sm text-muted-foreground">UI components built using Radix UI and styled with
                            Tailwind
                            CSS.</p>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                        class="h-12 w-12 fill-current">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">Authentication</h3>
                        <p class="text-sm text-muted-foreground">Authentication using NextAuth.js and middlewares.</p>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <svg viewBox="0 0 24 24" class="h-12 w-12 fill-current">
                        <path
                            d="M13.976 9.15c-2.172-.806-3.356-1.426-3.356-2.409 0-.831.683-1.305 1.901-1.305 2.227 0 4.515.858 6.09 1.631l.89-5.494C18.252.975 15.697 0 12.165 0 9.667 0 7.589.654 6.104 1.872 4.56 3.147 3.757 4.992 3.757 7.218c0 4.039 2.467 5.76 6.476 7.219 2.585.92 3.445 1.574 3.445 2.583 0 .98-.84 1.545-2.354 1.545-1.875 0-4.965-.921-6.99-2.109l-.9 5.555C5.175 22.99 8.385 24 11.714 24c2.641 0 4.843-.624 6.328-1.813 1.664-1.305 2.525-3.236 2.525-5.732 0-4.128-2.524-5.851-6.594-7.305h.003z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold">Subscriptions</h3>
                        <p class="text-sm text-muted-foreground">Free and paid subscriptions using Stripe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-black text-white pt-16 pb-8 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 gap-y-12 md:gap-x-8">
                <div class="md:col-span-4 lg:col-span-6 max-w-md">
                    <h3 class="text-2xl font-normal mb-6 leading-tight">Keep up to date with our quarterly newsletter,
                        "You've got mail."</h3>
                    <div class="mt-4 space-y-4">
                        <input type="email" placeholder="Enter email address..."
                            class="newsletter-input w-full px-4 py-3 bg-zinc-900 rounded text-white border border-zinc-800 focus:outline-none focus:border-zinc-700">
                        <button
                            class="bg-white text-black px-6 py-2.5 rounded-full flex items-center font-medium hover:bg-gray-200 transition-colors">
                            Subscribe
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden md:block md:col-span-1 lg:hidden"></div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 col-span-1 md:col-span-7 lg:col-span-6 gap-y-12 sm:gap-x-8 md:gap-x-8 lg:gap-x-10">
                    <div>
                        <h3 class="text-sm font-normal uppercase tracking-wide text-gray-400 mb-5">Get in Touch</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Start a Project</a>
                            </li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Join the Team</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Press & Media</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Drop Us a Note</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-normal uppercase tracking-wide text-gray-400 mb-5">See More</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Home</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Work</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Services</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Latest</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">About</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Careers</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    <div class="sm:col-span-2 md:col-span-1 lg:col-span-1">
                        <h3 class="text-sm font-normal uppercase tracking-wide text-gray-400 mb-5">Follow Us</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Instagram</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">LinkedIn</a></li>
                            <li><a href="#" class="text-sm hover:text-gray-300 transition-colors">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-16 pt-6 border-t border-zinc-800">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-xs text-gray-500 hover:text-gray-300">Sitemap</a>
                        <a href="#" class="text-xs text-gray-500 hover:text-gray-300">Privacy Policy</a>
                    </div>
                    <div class="text-xs text-gray-500">
                        © 2025, Site. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>