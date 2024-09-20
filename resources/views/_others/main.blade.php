<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Bookmark Search Engine</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    </head>
    <body>


          <div class="min-h-screen bg-base-200">

            <div class="p-6 navbar">
                {{-- Header-Text --}}
                <div class="items-center flex-1">
                    <div class="flex flex-col">
                        <h1 class="text-3xl font-bold text-transparent bg-gradient-to-r from-accent to-secondary bg-clip-text">Bookmark-se</h1>
                        <p class="text-sm">
                            @if( $data =='stable')
                                <span class="text-success">✦ </span>
                            @else
                                <span class="text-error">✦ </span>
                            @endif
                            API
                        </p>
                    </div>
                </div>


                <div class="items-center justify-end flex-none w-4/12">
                    <span class="w-full text-right">140-url embedded</span>
                    <select class="w-full max-w-xs mx-4 select-sm select select-bordered">
                        <option selected disabled>Collections</option>
                        <option>University</option>
                        <option>JavaScript</option>
                        <option>Python</option>
                        <option>Personal</option>
                      </select>

                  <div class="dropdown dropdown-end">

                    <div tabindex="0" role="button" class="avatar btn btn-circle btn-ghost">
                        <div class="mask mask-squircle w-9">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                          </div>
                    </div>
                    <ul
                      tabindex="0"
                      class="menu dropdown-content menu-sm z-[1] mt-3 w-52 rounded-box bg-base-100 p-2 shadow outline outline-1 outline-primary">
                      <li><a><x-heroicon-s-squares-plus class="w-4 h-4 mr-2 text-primary"/>Collections</a></li>
                      <li><a><x-iconsax-bul-logout class="w-4 h-4 mr-2 text-primary"/>Logout  </a></li>
                    </ul>
                  </div>

                </div>
            </div>

              <div class="hero">
                <div class="flex flex-col justify-center w-full max-w-full text-center hero-content">

                    <div role="tablist" class="w-full px-8 tabs tabs-lifted tabs-sm">
                        <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="Aa | Text" checked="checked" />
                        <div role="tabpanel" class="w-full p-10 tab-content">
                            {{-- Text Search --}}
                            <div class="flex justify-center gap-2">
                                <label class="flex items-center w-8/12 input input-bordered input-primary">
                                    <x-iconpark-search class="w-6 h-6 btn-info text-primary" />
                                    <input type="text" placeholder="Bookmark: title, url, description" class="w-full input-lg"/>
                                  </label>
                                  <button class="font-bold uppercase btn btn-primary">Search</button>
                            </div>
                        </div>

                        <input
                          type="radio"
                          name="my_tabs_1"
                          role="tab"
                          class="tab [--tab-border-color:green]"
                          aria-label="🖼️ | Image"
                          />
                        <div role="tabpanel" class="p-10 tab-content">
                            {{-- Image Search --}}

                            <div class="flex justify-center gap-2">
                                <input
                                type="file"
                                class="w-full max-w-xs file-input file-input-bordered outline outline-1 outline-primary" />

                                <button class="font-bold uppercase btn btn-primary">Search</button>

                            </div>

                        </div>

                        <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="</> | Code" />
                        <div role="tabpanel" class="p-10 tab-content">
                            {{-- Code Search --}}
                            <div class="relative flex justify-center">

                                <div class="w-7/12 p-4 mt-0 text-left mockup-code outline outline-1 outline-primary">
                                    <div class="absolute z-10 flex right-2 top-2">
                                        <button class="btn btn-sm" onclick="my_modal_5.showModal()">
                                            <x-feathericon-edit class="w-6 h-6 btn-info" />
                                        </button>
                                        <button class="font-bold uppercase btn btn-primary btn-sm">Search</button>
                                    </div>



                                    <pre><code>without prefixThere</code></pre>
                                    <pre><code>    There</code></pre>
                                    <pre><code>without </code></pre>
                                </div>

                                <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                                    <div class="modal-box">
                                        <label class="form-control">
                                            <div class="label">
                                                <span class="label-text">Edit your code here...</span>
                                            </div>
                                            <textarea class="w-full h-24 textarea textarea-bordered" placeholder="// Code Here"></textarea>
                                            </label>

                                        <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn">Save & Close</button>
                                        </form>
                                        </div>
                                    </div>
                                </dialog>

                            </div>

                      </div>
                    </div>


                    <div class="grid w-11/12 grid-cols-4 gap-4 text-left">

                        <div class="grid w-full col-span-3 gap-4">

                            <div class="shadow-xl card bg-base-100">
                                <div class="p-4 card-body">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 avatar">
                                            <img src="https://stackoverflow.com/favicon.ico" />
                                        </div>
                                        <div class="flex-col">
                                            <p class="font-bold text-md"> Stackoverflow.com</p>
                                            <a class="text-sm link link-hover">https://stackoverflow.com/questions/35541864/es6-export-default-function</a>
                                        </div>

                                    </div>


                                  <h2 class="card-title text-primary">
                                    javascript - ES6 export default function - Stack Overflow
                                  </h2>
                                  <p>Communities for your favorite technologies. Explore all Collectives Now available on Stack Overflow for Teams! AI features where you work: search, IDE, and chat. Ask questions, find answer ...</p>
                                </div>

                            </div>

                            <div class="shadow-xl card bg-base-100">
                                <div class="p-4 card-body">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 avatar">
                                            <img src="https://google.com/favicon.ico" />
                                        </div>
                                        <div class="flex-col">
                                            <p class="font-bold text-md"> Stackoverflow.com</p>
                                            <a class="text-sm link link-hover">https://stackoverflow.com/questions/35541864/es6-export-default-function</a>
                                        </div>

                                    </div>


                                  <h2 class="card-title text-primary">
                                    javascript - ES6 export default function - Stack Overflow
                                  </h2>
                                  <p>Communities for your favorite technologies. Explore all Collectives Now available on Stack Overflow for Teams! AI features where you work: search, IDE, and chat. Ask questions, find answer ...</p>
                                </div>

                            </div>

                        </div>





                          <div class="w-full col-span-1 shadow-xl card bg-base-100">
                            Graph?
                          </div>
                    </div>


              </div>

          </div>

    </body>
</html>
