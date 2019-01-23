<template>
     <div class="">
    <div class="row justify-content-center mt-5">
        <div class=" justify-content-center col-8 col-sm-8 col-md-6 col-lg-5 col-xl-4 theatre" 
        >
        <div class="screen m-auto mb-5" >
            <p class=" text-center">screen</p>
        </div>




        <div class=" mt-5" style="margin-left: 5px">    

            <div v-for="(row,index) in rows" class="row mt-1">




                <div style="display: flex" class=" mr-auto">
                    <span   :key="i" v-for='(l,i) in lseats'  :title="row+'-'+l">
                        <div  
                        @mouseenter="hover" 
                        @mouseleave="nothover" 
                        @click="click(index,i,$event)" 
                         :title="row+'-'+l"  
                         class=" colorgreen ml-1 "></div>
                    </span>
                    

                </div>

                <div style="display: flex" class=" ml-auto">
                    <span  :key="i" v-for='(r,i) in rseats'  :title="row+'-'+r">
                        <div   @mouseenter="hover" 
                        @mouseleave="nothover"
                         @click="click(index,i,$event)"
                        class=" colorgreen ml-1 "
                         :title="row+'-'+r"></div>
                    </span>
                    

                </div>






                



            </div>

        </div>

        






  







    </div>

 





</div>
 <button class="text-center m-auto btn btn-info">Reserve</button>
</div>
</template>

<script>
    export default {
     data(){
        return{
            enter:false,
            rows:['A','B','C','D','E','F','G','H','I'],
            lseats:[1,2,3,4,5],
            rseats:[6,7,8,9,10],
            reserve:[],
            count:0
        }   
    },
    methods:{
         
        hover(event){

         event.target.classList.toggle("hover")
        },
        nothover(){
            event.target.classList.toggle("hover")
        },
        click(index,i,event){

            var cc=-1
            if (!event.target.classList.contains('colorblack')) {
          var  name=event.target.getAttribute('title')
             event.target.classList.toggle("colorblack")
                this.reserve.push({
                    'rindex':index,
                    'cindex':i,
                    'name':name
                })
                console.log(this.reserve)
                this.count=1
            }
            else{
                this.reserve.forEach(function(r1){
                    if (r1.name==name) {
                        return cc
                    }
                    cc++
                })
                this.reserve.splice(cc,1)
                 event.target.classList.toggle("colorblack")
                 console.log(this.reserve)
                 this.count=0

            }


             
        
    }
}
}
</script>

<style lang="scss">

.hover{
   background-color:grey;
}

</style>