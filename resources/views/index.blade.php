
<x-layout_user>

   <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="grid grid-cols-1 w-[70%] m-auto gap-4 pt-20 mt-10 pb-5 md:grid-cols-2">
            <div class="header bg-transparent items-center">
                <p>Scpel is a general-purpose systems-reflective meta-programming language with static typing,
                    systems-level
                    access, and C++-like syntax and semantics. With Scpel, you can write fast, read fast, and run fast,
                    or even
                    test on-the-fly the most complex of deep and machine learning algorithms.
                    <br><br>
                    Strong, fast and more reliable code.
                </p>
                <div class="mt-20 pt-5 flex flex-col">
                    <!-- Flex container for the first two buttons side by side with space in the middle -->
                    <div class="grid grid-col-1 gap-2 md:grid-cols-2 lg:grid-cols-3">
                        <button type="button"
                            class="w-full py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Download
                            DPKG File</button>
                        <button type="button"
                            class="w-full py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Download
                            SSAIL dpkg</button>
                        <button type="button"
                            class="w-full py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a
                                href="scpel_ide.html">Download IDE</a> </button>
                    </div>

                    <!-- Full-width button below the first two buttons -->
                    <button type="button"
                        class="w-full py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Other
                        Downloads</button>
                </div>
            </div>
            <div class="header bg-transparent items-center ">
                <div class="b-2 flex-col console_div flex-col">
                    <div class="w-[100%]">
                        <div class="code-editor pl-2 pr-2" id="codeEditor">
                            <!-- Line numbers container -->
                            <div class="line-numbers text-blue-700 text-right select-none pr-4"
                                id="lineNumbersContainer">
                                <!-- Line numbers will be added here dynamically using JavaScript -->
                            </div>

                            <!-- Code area -->
                            <textarea id="code" class="p-4 w-full bg-gray-100 resize-none"></textarea>
                        </div>
                        <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                            <button class="bg-gray-100 pl-1 pr-1">Compile and Run</button>
                            <button class="bg-gray-100 pl-1 pr-1"><a href="https://playground.scpel.org">Open in IDE</a>
                            </button>
                        </div>
                    </div>
                    <script>
                        // Add line numbers dynamically and synchronize scrolling
                        const codeTextarea = document.getElementById("code");
                        const lineNumbersContainer = document.getElementById(
                            "lineNumbersContainer"
                        );

                        codeTextarea.addEventListener("input", updateLineNumbers);
                        codeTextarea.addEventListener("scroll", syncScroll);
                        codeTextarea.addEventListener("input", highlightCurrentLine);

                        function updateLineNumbers() {
                            const lines = codeTextarea.value.split("\n");
                            const lineNumbersHTML = lines
                                .map((_, index) => `<div>${index + 1}</div>`)
                                .join("");
                            lineNumbersContainer.innerHTML = lineNumbersHTML;
                        }

                        function syncScroll() {
                            lineNumbersContainer.scrollTop = codeTextarea.scrollTop;
                        }

                        function highlightCurrentLine() {
                            const lineNumber = codeTextarea.value
                                .substr(0, codeTextarea.selectionStart)
                                .split("\n").length;
                            const lineNumbers =
                                lineNumbersContainer.querySelectorAll("div");

                            lineNumbers.forEach((line, index) => {
                                if (index + 1 === lineNumber) {
                                    line.classList.add("current-line");
                                } else {
                                    line.classList.remove("current-line");
                                }
                            });
                        }

                        // Toggle Playground button functionality
                        const playgroundBtn = document.getElementById("playgroundBtn");
                        const codeEditor = document.getElementById("codeEditor");
                        const buttonsContainer =
                            document.getElementById("buttonsContainer");

                        playgroundBtn.addEventListener("click", () => {
                            const isCodeEditorHidden = codeEditor.style.display === "show";
                            codeEditor.style.display = isCodeEditorHidden ? "flex" : "show";
                            buttonsContainer.style.display = isCodeEditorHidden ?
                                "flex" :
                                "show";
                            updateLineNumbers(); // Update line numbers on toggle
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div id="alert-additional-content-5"
            class="p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
            role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2 dark:text-gray-300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Scpel 1.0.0 is here!</h3>
            </div>
            <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                After a long tedious process of design and implemetation, the language has undergone several revisions
                from
                0.0.1 through 0.9.0, a build that has been tested accross multiple disciplines and ready for the
                community.
            </div>
            <div class="flex">
                <button type="button"
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-800">
                    <svg class="me-2 h-3 w-3 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    <a href="scpel_getting_started.html">Get Started</a>
                </button>
                <button type="button"
                    class="text-gray-800 bg-transparent border border-gray-700 hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-800 dark:text-gray-300 dark:hover:text-white"
                    data-dismiss-target="#alert-additional-content-5" aria-label="Close">
                    Dismiss
                </button>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="header bg-transparent items-center grid grid-cols-1 gap-4 mt-4 p-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="w-[100%]">
                <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400"><a href="scpel_getting_started.html">Get
                        Started</a></h1>
                <p>Whether you're new to programming or an experienced developer, it's easy to learn and use Scpel.</p>
                <br>
                <a href="#">Start with our Beginner's Guide</a>
            </div>
            <div class="w-[100%]">
                <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400"><a
                        href="https://docs.scpel.org">Documentation</a></h1>
                <p>Whether you're new to programming or an experienced developer, it's easy to learn and use Scpel.</p>
                <br>
                <a href="#">docs.scpel.org</a>
            </div>
            <div class="w-[100%]">
                <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400"><a href="scpel_downloads.html">Downloads</a>
                </h1>
                <p>Whether you're new to programming or an experienced developer, it's easy to learn and use Scpel.</p>
                <br>
                <a href="#">mirrors.scpel.org</a>
            </div>
            <div class="w-[100%]">
                <h1 class="text-xl font-bold mt-2 mb-4 text-gray-400"><a href="scpel_community.html">Community</a>
                </h1>
                <p>Whether you're new to programming or an experienced developer, it's easy to learn and use Scpel.</p>
                <br>
                <a href="#">ssf.scpel.org</a>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="w-full flex flex-col items-center justify-center mx-auto mt-4 p-4">
            <h1 class="text-xl font-bold mb-2 text-gray-400">Support Scpel Development</h1>
            <p class="text-justify">Scpel is made possible through the hard work and dedication of many volunteers,
                with the
                coordination and outreach of the Scpel Software Foundation, a 501(c)(3) non-profit organization. You can
                help
                further the development of Scpel and help grow our community by supporting the Foundation.</p>
            <div class="flex flex-wrap pt-2">
                <button type="button"
                    class="w-70 py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Donate</button>
                <button type="button"
                    class="w-90 py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
                    More About The Foundation</button>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 w-full">
        <div class="w-full grid grid-col-1 p-4 gap-4 md:grid-cols-2">
            <div class="flow-root">
                <div class="pb-4">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">News & Announcements</h1>
                </div>
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="flow-root">
                <div class="pb-4">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">Discussions and forum</h1>
                </div>
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="py-1 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcVWPXVh9jXaUG6Bb6y6SWdM3BfRTvn4RYhA&s"
                                    alt="Null">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Introducing an interpreter in the GCC internal structure...
                                </p>

                                <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        by Francis Ssessaazi
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        1 day ago
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-col items-center justify-between m-auto p-4 w-full">
        <div class="w-full m-auto mb-4 flex flex-col items-center">
            <h1 class="text-xl font-bold mb-2 text-gray-400">Industry Proven</h1>
        </div>
        <div class="w-full flex flex-wrap items-center justify-center">
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-1.png" alt="Logo 1">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-2.png" alt="Logo 2">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-3.webp" alt="Logo 3">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-4.png" alt="Logo 4">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-5.png" alt="Logo 5">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-6.png" alt="Logo 6">
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img class="max-w-10 max-h-10 object-cover" src="./industries/client-7.png" alt="Logo 6">
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="w-full grid grid-col-1 p-4 gap-4 md:grid-cols-2">
            <div class="">
                <div class="pb-4">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">Scpel Software Foundation</h1>
                </div>
                <p>The mission of the Scpel Software Foundation is to promote, protect, and advance Scpel, and to
                    support and
                    facilitate the growth of a diverse and international community of Scpel programmers. <a
                        href="#">Learn
                        more</a></p>
                <br><br>
                <div class="grid grid-col-1 gap-2 mt-4 md:grid-cols-2">
                    <button type="button"
                        class="w-full py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Become
                        a Member</button>
                    <button type="button"
                        class="w-full py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Contribute
                        - Open Source</button>
                </div>
            </div>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./SSF.jpg" alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./com_1.webp" alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./SSF.jpg" alt="">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./SSF.jpg" alt="">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./SSF.jpg" alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button"
                        class="absolute bottom-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute bottom-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="grid grid-col-1 w-full m-auto mt-4 p-4 gap-4 md:grid-cols-2">
            <div class="">
                <div class="pb-4">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">Mailing List & Newsletter</h1>
                </div>
                <p>
                    Subscribe to the Scpel Software Foundation's mailing list for the latest updates, project news, and
                    exclusive
                    content. Join our community and explore innovative software solutions with us.</p>
                <div class="flex flex-wrap gap-2 mt-1 md: grid grid-col-2">
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-1"
                            class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@mail.com">
                    </div>
                    <button type="button"
                        class="w-100 h-10 py-2 px-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Subscribe</button>
                </div>
            </div>

            <div class="w-full grid grid-col-1 md:grid-cols-2">
                <div class="w-full ">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">Papers</h1>
                    <ul class="max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
                        <li class="cursor-pointer">
                            Scpel_Paper_One
                        </li>
                        <li class="cursor-pointer">
                            Scpel_Paper_Two
                        </li>
                        <li class="cursor-pointer">
                            Scpel_Paper_Three
                        </li>
                        <li class="cursor-pointer">
                            Scpel_Paper_Four
                        </li>
                        <li class="cursor-pointer">
                            Scpel_Paper_Five
                        </li>
                    </ul>
                    <div class="mt-4"><a class="cursor-pointer" href="#">papers.scpel.org</a></div>
                </div>
                <div class="w-full ">
                    <h1 class="text-xl font-bold mb-4 text-gray-400">Community Guides</h1>
                    <ul class="max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
                        <li class="cursor-pointer">
                            First Contribution Practices
                        </li>
                        <li class="cursor-pointer">
                            Core-Dev Guide
                        </li>
                        <li class="cursor-pointer">
                            Standard Library Guide
                        </li>
                        <li class="cursor-pointer">
                            Maintainers Guide
                        </li>
                        <li class="cursor-pointer">
                            Community Code Of Conduct
                        </li>
                    </ul>
                    <div class="mt-4"><a class="cursor-pointer" href="#">papers.scpel.org</a></div>
                </div>
            </div>
        </div>
    </section>

</x-layout_user>
