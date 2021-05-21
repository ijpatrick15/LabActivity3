<template>
   <div class="flex">
       <div class="max-w-xs w-full min-h-screen bg-white border-1 border-grey-200 ">
           <chat-side-bar></chat-side-bar>
       </div>
        <div class="flex-1 bg-gray-100 ">
           <chat-panel></chat-panel>
       </div>
       <div>
   
       </div>
</template>



<script>

    import ChatPanel from './ChatPanel.vue';
    import ChatSideBar from './ChatSideBar.vue';

    export default {
        components:{
            ChatSideBar,
            ChatPanel
        }, 

      data(){
          return{
 
          }
      },
        mounted(){


        }
    }
</script>
