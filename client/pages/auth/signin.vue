<template>
  <div class="container mt-16">
    <div class="flex flex-col items-center">
      <h1 class="text-3xl text-gray-700 font-medium mb-10">
        Hello.
      </h1>

      <form 
        action="#"
        class="bg-white p-8 rounded w-full md:w-6/12 lg:w-4/12 mb-6"
        @submit.prevent="submit"
      >
        <div class="mb-6">
          <label
            for="email"
            class="block text-gray-600 font-medium mb-2"
          >
            Email address
          </label>
          <input
            type="text"
            name="email"
            id="email"
            class="border-2 border-gray-400 rounded block w-full p-3"
            v-model="form.email"
          >
          <!-- <div class="text-red-500 mb-4 text-sm mt-1">
            Message
          </div> -->
        </div>

        <div class="mb-6">
          <label
            for="password"
            class="block text-gray-600 font-medium mb-2"
          >
            Password
          </label>
          <input
            type="password"
            name="password"
            id="password"
            class="border-2 border-gray-400 rounded block w-full p-3"
            v-model="form.password"
          >
        </div>

        <div class="mb-6">
          <button type="submit" class="bg-blue-500 text-white p-4 rounded text-center font-medium block w-full">
            Sign in
          </button>
        </div>
      </form>

      <div class="text-center text-gray-600">
        No account?

        <nuxt-link :to="{ name: 'index' }">Create one here</nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },

  methods: {
    async submit() {
      await this.$auth.loginWith("local", {
        data: this.form
      });
    }
  }
}
</script>