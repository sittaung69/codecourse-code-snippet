<template>
  <div class="bg-white py-8 lg:py-0 flex items-center">
    <div class="container flex flex-wrap lg:flex-no-wrap items-center">
      <nuxt-link
        :to="{ name: 'index' }" 
        class="mr-10 flex-shrink-0"
      >
        <img src="~/assets/logo.svg" alt="Logo" class="h-8" />
      </nuxt-link>

      <a
        href="#"
        class="lg:hidden ml-auto flex flex-col relative justify-center w-8 h-8"
        @click.prevent="mobileNavOpen = !mobileNavOpen"
      >
        <span
          class="bg-blue-500 h-1 w-8 rounded mb-1"
          :class="{
            'rotate-45 absolute right-0': mobileNavOpen
          }"
        ></span>

        <span
          class="bg-blue-500 h-1 w-8 rounded mb-1"
          :class="{
            '-rotate-45 absolute right-0': mobileNavOpen
          }"
        ></span>

        <span
          class="bg-blue-500 h-1 w-8 rounded mb-1"
          :class="{
            'hidden': mobileNavOpen
          }"
        ></span>
      </a>

      <div
        class="w-full flex"
        :class="{ 'mt-8': mobileNavOpen, 'hidden lg:flex': !mobileNavOpen }"
      >
        <ul class="lg:h-24 lg:flex items-center w-full lg:w-auto">
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Browse
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Search
            </nuxt-link>
          </li>
        </ul>

        <ul
          class="lg:h-24 lg:flex items-center w-full lg:w-auto text-right ml-auto"
        >
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Dashboard
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Kenneth Fernandez
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Sign in
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Create an account
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
            >
              Sign out
            </nuxt-link>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      mobileNavOpen: false
    }
  }
}
</script>