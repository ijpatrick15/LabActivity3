


<script>
    export default{
        props: ['chatRoom'],
        data(){
            return{
                focused: false,
                message: ""
            }
        },

        methods: {
            handleKeyPress(event){
                if (! this.focused){
                    return;
                }
                if (event.charCode == 13){
                    this.sendMessage();
                }
            },
            async sendMessage(){
                this.$emit('message',this.message)
                this.message = "";
            }
        }
    }

</script>
