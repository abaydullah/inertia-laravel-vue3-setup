
<template>
    <div class="max-w-3xl w-full mx-auto py-10 h-[3000px] space-y-10">
        <form v-on:submit.prevent="post">
            <div>
                <label for="title" class="text-2xl">Title</label>
                <input name="title" id="title" :class=" form.errors.title ? 'mt-5 border-red-600 border-2  w-full p-2': 'mt-5 border w-full p-2'" :placeholder="form.errors.title ? 'Title Required' : ''" v-model="form.title">
            </div>
           <div>
               <label for="body" class="text-2xl">Body</label>
               <textarea name="body" id="body" rows="4" class="mt-5 border w-full p-2 " v-model="form.body"></textarea>


           </div>
            <button type="submit" class="bg-green-500 px-3 py-1 mt-5">Post</button>
        </form>
        <div v-for="post in posts">
            <h1 class="text-2xl">{{post.title}}</h1>
            <p class="text-sm">{{post.body}}</p>
        </div>
    </div>
</template>



<script setup>
    import {useForm} from "@inertiajs/vue3";

    defineProps({
        posts: Array
    })

    const form = useForm({
        title: '',
        body: ''
    })

    const post = () => {
        form.post(route('posts.store'),{
          preserveScroll: true,
          onSuccess: () => {
              form.reset()
          }
        })
    }
</script>



<style scoped>

</style>
