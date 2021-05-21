<template>
   <div class="py-2 px-3">
        <div class="m-4">
            <label for="search" class="block text-sm font-medium leading-5 sr-only text-grey-700">Find people,rooms,projects<label>
            <div class="relative rounded-full bg-white shadow-sm">
                <div class="absolute insert-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input id="search" class="form-input rounded-full bg-white block w-full pl-10 sm:text-sm sm:leading-5"
                    placeholder="Find people, rooms and projects..."/>
            </div>
       </div>
      
       <div class="mt-8">
       <div class="flex justify-between items-center">
        <label class="font-bold tracking-wider text-xs uppercase mb-2">Conversations</label>
        <button class="hover:bg-grey-200 p-1 rounded-md cursor-pointer">
            <svg class="h-4 w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            viewBox="0 0 24 24" stroke="currentColor"> <path d="M12 4v16m8-8H4"></svg>
        </button>
  </div>
       </div>
 </div>
</template>



<script>
import{ EventBus }from '../../EventBus';

    export default {
      data(){
          return{
                chatRooms:[],
                select:null,
                loading: false
          }
      },
        async mounted(){
            try{
                const data = axios.get('/chat/all-rooms'); 
                this.chatRooms = data;
                this.loading - false;
            }catch{
                //leave
            }
        },
        methods:{
            select(id){
                this.select=id;
                EventBus.$emit('chatroom-selected',id);
            }
        }

        }
    
</script>
