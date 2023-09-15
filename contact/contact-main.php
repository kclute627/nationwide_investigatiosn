<form action="" method="post" id="contactForm"
                    class="w-full max-w-lg box pb-10 pt-10 px-5  rounded-lg font-display xl:pt-10 bg-primaryBlue/50  ">

                    <div class=" opacity-0 border-2 p-4 font-bold transition-all duration-200 absolute top-2 left-[3rem] "
                        id="emailBox">

                    </div>
                    <div class=" border-2  border-red-700 p-4 font-bold opacity-0 h-0 w-0 transition-all duration-200 absolute top-2 left-[3rem]"
                        id="failureBox">
                        Network Error Please Email info@nwbs-inc.com
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-1 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 font-display"
                                for="grid-first-name">
                                First Name <span class="text-red-600 text-lg"> * </span>
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder="Jane" name="firstName" required>

                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name" required>
                                Last Name <span class="text-red-600 text-lg"> * </span>
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Doe" name="lastName" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-company">
                                Company Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-company" type="text" placeholder="ABC Company" name="company">

                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-email">
                                Email <span class="text-red-600 text-lg"> * </span>
                            </label>
                            <input
                                class=" appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-email" type="email" placeholder="yourEmail@email.com" name="email" required>

                            <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-phone">
                                Phone Number <span class="text-red-600 text-lg opacity-0"> * </span>
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-phone" type="tel" placeholder="555-322-2341" name="phone">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-note">
                                Note
                            </label>
                            <textarea
                                class="appearance-none resize-none block w-full h-[10rem] bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-note" type="text" placeholder="Your Message" name="note">
                            </textarea>

                        </div>



                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2 justify-center">
                        <input value="Submit" type="submit" class="px-10 py-2 rounded-md bg-blue-900 text-white">
                    </div>
                </form>