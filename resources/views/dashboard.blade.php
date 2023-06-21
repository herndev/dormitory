<x-app-layout>
<!-- Main Hero Content -->
    <div
      class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('images/bg1.jpg')">
      <h1 style="font-weight: bold; font-size: 80px; color: white;text-shadow:4px 2px 2px #000000 ;font-family: Times New Roman, Times, serif;"
        class="font-mono text-3xl font-extrabold text-transparent:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Welcome To La Grande Maison</span>
      </h1>
      <br>
      <div style="font-size: 45px;text-shadow:4px 2px 2px #000000; " class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        SEE LIFE FROM A DIFFERENT PERSPECTIVE
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="{{ route('reservations.step.one') }}" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Make Reservation
          </a>
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">OUR STORY
              </h3>
              <h2 class="text-4xl text-green-600">Welcome</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                Repellendus mollitia quaerat est voluptas!
              </p>
              <div class="relative flex">
                <a href="#_"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="images/our1.jpg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div style="margin-right: 500px;margin-top:-350px" class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">About Us</h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                CONTRACT LENGHT</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">college and part time teachers = one semester, regular faculty = one-year, basic education student = one-year</p>
               <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                PAYMENT POLICIES TO CONSIDER</h2>
              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                (one month advance, one month deposit, and the reservation fee) and other add-ons (extra fan and devices other than mobile phones and laptops) through flat rates.
              </p>
              
            </div>
          </div>
          
          <div style="margin-left: 530px" class="w-full md:w-1/2"><img
              class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl"
              src="images/bg3.jpg" alt="feature image"></div>
        </div>
      </div>
    </section>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">Our Rooms</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          La Grande Maison offers:</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="images/rm1.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">One Person Room</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">LA GRANDE MAISON ROOM 100</h4>
              <p class="leading-normal text-gray-700">Comfortable room for one person only.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Book Now</button>
              <span class="text-xl text-green-600">₱1990.00</span>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="images/rm3.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Air condition</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">LA GRANDE MAISON ROOM 101</h4>
              <p class="leading-normal text-gray-700">Comfortable room good for two person and a air condintioning.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Book Now</button>
              <span class="text-xl text-green-600">₱2400.00</span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="images/rm2.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Three Person Room</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">LA GRANDE MAISON ROOM 102</h4>
              <p class="leading-normal text-gray-700">Comfortable room good for three person.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Book Now</button>
              <span class="text-xl text-green-600">₱1650.00</span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="images/rm4.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Four Person Room</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">LA GRANDE MAISON ROOM 103</h4>
              <p class="leading-normal text-gray-700">Comfortable room good for three person.</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Book Now</button>
              <span class="text-xl text-green-600">₱1550.00</span>
            </div>
          </div>
          

          
          </div>

        </div>
      </div>
    </section>
   

  
</x-app-layout>
