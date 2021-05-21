<template>
   <div class="pt-2 px-3 flex-col items-center justify-around h-full flex-grow flex-1 flex">
   <div v-if="selected">
       Selected {{ selected}}
   </div>
      
       </div>
</template>


<script>
  import{ EventBus }from '../../EventBus';
import MessageComposerVue from './MessageComposer.vue';
    
    export default {
      data(){
          return{
          select:null,
          messages: []
      }
          
      },
        mounted(){
            EventBus.$on('chatroom-selected',(id) => {
                this.fetchConversation(id);
            });

        },
        methods: {
         async  fetchConversation(id){
                this.selected = id;
                
            try{
                const {data} = await axio.get('/chat/$(id)');
                this.messages = data;
             
            } catch{
 

            }
            },
         async  addMessage(content){
            try{
                const {data} = await axio.post('/chat/${selected}',{
                content: content
                 });

                this.messages.push(data);
            } catch{
 

            }
                
                //post to server
                //get a response of new message
                //appendto the list
                console.log(event);
            }
        },
        filters:{
            date(value){
                return moment(value).format("hh:mm a");
            }
        },
        components:{
            'message-composer':MessageComposer
        }
        
    }
</script>
