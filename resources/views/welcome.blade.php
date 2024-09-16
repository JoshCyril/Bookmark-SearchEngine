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


          <div class="min-h-screen bg-base-100">

            <div class="navbar p-12">
                {{-- Header-Text --}}
                <div class="flex-1">
                    <div class="flex flex-col">
                        <h1 class="bg-gradient-to-r from-accent to-secondary bg-clip-text text-3xl font-bold text-transparent">Bookmark-se</h1>
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


                <div class="flex-none">
                  <div class="dropdown dropdown-end">

                    <div tabindex="0" role="button" class="avatar btn btn-circle btn-ghost">
                        <div class="mask mask-squircle w-9">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                          </div>
                    </div>
                    <ul
                      tabindex="0"
                      class="menu dropdown-content menu-sm z-[1] mt-3 w-52 rounded-box bg-base-100 p-2 shadow">
                      <li><a class="justify-between">Profile<span class="badge">New</span></a></li>
                      <li><a>Settings</a></li>
                      <li><a>Logout</a></li>
                    </ul>
                  </div>

                </div>
            </div>

              <div class="hero">
                <div class="hero-content flex w-full max-w-full flex-col justify-center text-center">

                    <div role="tablist" class="tabs tabs-bordered w-full px-8">
                        <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aa | Text" checked="checked" />
                        <div role="tabpanel" class="tab-content w-full p-10">
                            {{-- Text Search --}}
                            <div class="flex justify-center gap-2">
                                <label class="input input-bordered input-primary flex w-8/12 items-center">

                                    <svg width="18" height="18" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5979 39.1957C22.1715 39.1957 24.7199 38.6888 27.0977 37.7039C29.4754 36.7191 31.6358 35.2755 33.4557 33.4557C35.2755 31.6358 36.7191 29.4754 37.7039 27.0977C38.6888 24.7199 39.1957 22.1715 39.1957 19.5979C39.1957 17.0242 38.6888 14.4758 37.7039 12.0981C36.7191 9.72037 35.2755 7.55991 33.4557 5.74008C31.6358 3.92025 29.4754 2.47668 27.0977 1.4918C24.7199 0.506914 22.1715 -3.83501e-08 19.5979 0C14.4002 7.74515e-08 9.4154 2.06477 5.74008 5.74008C2.06477 9.4154 0 14.4002 0 19.5979C0 24.7955 2.06477 29.7803 5.74008 33.4557C9.4154 37.131 14.4002 39.1957 19.5979 39.1957ZM15.8481 10.5437C17.037 10.0516 18.3112 9.79858 19.5979 9.79894C20.031 9.79894 20.4464 9.62687 20.7527 9.32059C21.059 9.01432 21.231 8.59892 21.231 8.16578C21.231 7.73264 21.059 7.31724 20.7527 7.01096C20.4464 6.70469 20.031 6.53262 19.5979 6.53262C16.1328 6.53262 12.8096 7.90914 10.3593 10.3593C7.90914 12.8096 6.53262 16.1328 6.53262 19.5979C6.53262 20.031 6.70469 20.4464 7.01096 20.7527C7.31724 21.059 7.73264 21.231 8.16578 21.231C8.59892 21.231 9.01432 21.059 9.32059 20.7527C9.62687 20.4464 9.79894 20.031 9.79894 19.5979C9.79872 17.6596 10.3733 15.7648 11.4501 14.1532C12.5269 12.5415 14.0574 11.2854 15.8481 10.5437Z" fill="#01E4D5"/>
                                        <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M42.2269 32.6631C42.3358 32.4773 42.4069 32.2718 42.4361 32.0584C42.4653 31.845 42.452 31.628 42.3969 31.4197C42.3419 31.2115 42.2462 31.0162 42.1153 30.8451C41.9845 30.674 41.8211 30.5305 41.6346 30.4228C41.4481 30.3151 41.2421 30.2454 41.0285 30.2176C40.8149 30.1899 40.598 30.2046 40.3901 30.2611C40.1822 30.3175 39.9876 30.4145 39.8174 30.5464C39.6472 30.6784 39.5047 30.8427 39.3983 31.03C37.3916 34.5055 34.5055 37.3916 31.03 39.3983C30.8428 39.5047 30.6784 39.6472 30.5465 39.8174C30.4145 39.9876 30.3175 40.1822 30.2611 40.3901C30.2046 40.5979 30.1899 40.8149 30.2176 41.0285C30.2454 41.2421 30.3151 41.4481 30.4228 41.6346C30.5305 41.8211 30.6741 41.9845 30.8451 42.1153C31.0162 42.2461 31.2115 42.3418 31.4197 42.3969C31.628 42.4519 31.845 42.4653 32.0584 42.4361C32.2718 42.4069 32.4773 42.3358 32.6631 42.2269C34.167 41.3592 35.5807 40.3438 36.8832 39.1958L46.2053 48.5211C46.3571 48.6729 46.5374 48.7934 46.7358 48.8755C46.9342 48.9577 47.1468 49 47.3615 49C47.5763 49 47.7889 48.9577 47.9873 48.8755C48.1857 48.7934 48.366 48.6729 48.5178 48.5211C48.6697 48.3692 48.7901 48.189 48.8723 47.9906C48.9545 47.7922 48.9968 47.5795 48.9968 47.3648C48.9968 47.1501 48.9545 46.9374 48.8723 46.739C48.7901 46.5406 48.6697 46.3604 48.5178 46.2085L39.1925 36.8865C40.3442 35.5834 41.3629 34.1686 42.2334 32.6631" fill="#01EBC0"/>
                                        </svg>
                                    <input type="text" placeholder="Bookmark: title, url, description" class="input-lg w-full"/>


                                  </label>
                                  <button class="btn btn-primary font-bold uppercase">Search</button>
                            </div>



                        </div>

                        <input
                          type="radio"
                          name="my_tabs_1"
                          role="tab"
                          class="tab"
                          aria-label="🖼️ | Image"
                          />
                        <div role="tabpanel" class="tab-content p-10">
                            {{-- Image Search --}}

                            <div class="flex justify-center gap-2">
                                <input
                                type="file"
                                class="file-input file-input-bordered w-full max-w-xs outline outline-1 outline-primary" />

                                <button class="btn btn-primary font-bold uppercase">Search</button>

                            </div>

                        </div>

                        <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="</> | Code" />
                        <div role="tabpanel" class="tab-content p-10">
                            {{-- Code Search --}}
                            <div class="relative flex justify-center">

                                <div class="mockup-code m-10 mt-0 w-7/12 p-4 text-left outline outline-1 outline-primary">
                                    <div class="absolute right-2 top-2 z-10 flex">
                                        <button class="btn btn-sm" onclick="my_modal_5.showModal()">
                                            <x-feathericon-edit class="btn-info h-6 w-6" />
                                        </button>
                                        <button class="btn btn-primary btn-sm font-bold uppercase">Search</button>
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
                                            <textarea class="textarea textarea-bordered h-24 w-full" placeholder="// Code Here"></textarea>
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



              </div>

          </div>

    </body>
</html>
