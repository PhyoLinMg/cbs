<template>
    <div class="">
    <div class="   row justify-content-center mt-5">
        <div class="align-items-center justify-content-center col-8 col-sm-8 col-md-6 col-lg-5 col-xl-4 theatre" 
        >
        <div class="screen m-auto mb-5" >
            <p class=" text-center">screen</p>
        </div>




        <div class=" mt-5" style="margin-left: 5px">    

            <div v-for="(row,index) in rows" class="row justify-content-center mt-1">
        
        
                    <span  :key="i" v-for='(r,i) in seats'  :title="row+'-'+r">



                        <template v-if="check(row,r)" >
                            <div
                        class=" ml-1 colorred  "
                        :title="row+'-'+r"></div>
                        </template>




                        <template v-else >
                        <div
                        @mouseenter="hover" 
                        @mouseout="nothover"
                        @click="click(index,i,$event)"
                        class=" ml-1 colorgreen  "
                        :title="row+'-'+r"></div>
                        </template>
                      

                    </span>
                    







                



            </div>

        </div>

        














    </div>







</div>

<div  class="row mt-2 justify-content-center">
        <b-button  class=" text-center btn btn-info" @click="book()">
        Reserve
    </b-button>
   
</div>
<div>

    <b-modal v-model="modalShow" hide-footer title="Your Information">
      <div class="d-block text-center">
        <div class="mb-5">
            <span class="mr-5 ">Your seats :</span>

            <span v-for="(item,index) in reserve">
                <template v-if="(index+1)==reserve.length"> {{ item.name }}</template>
               <template v-else> {{ item.name }},</template>
            </span>
        </div>
        <div class="mb-5">
            <span class="mr-5">Name:     </span><input class="ml-3" type="text" v-model="name">
        </div>
        <div class="mb-5">
            <span>Phone Number: </span><input type="text" v-model="phno">
        </div>
        
      </div>
      <b-btn class="mt-3" variant="outline-danger" block @click="book1()">Close Me</b-btn>
    </b-modal>
 
</div>
</div>
</template>

<script>
    export default {
       data(){
        return{
            name:null,
            modalShow: false,
            phno:null,
            id:null,
            enter:false,
            tof:false,
            rows:['A','B','C','D','E','F','G','H','I'],
            seats:[1,2,3,4,5,6,7,8],
            reserve:[],
            reserved:[
                {cindex: 0,name:"E-6",rindex: 4},
                {cindex: 2,name:"G-8",rindex: 2},
                {cindex: 2,name:"F-6",rindex: 5}
                ]
            }   
        },
        methods:{
            hover(event){

               event.target.classList.toggle("hover")
           },
           nothover(event){
                
              event.target.classList.toggle("hover")
        
           
        },
        book(event){
            if (this.reserve.length!=0) {
            this. modalShow=!this.modalShow


        }
        else{
            alert('U have to select at least one seat to be reserved')
        }
    },
    book1(e){
         
                     axios.post('/savebooking', {
                        name:this.name,
                        phno:this.phno,
                        seats:this.reserve,
                        mid:this.id
                  })
                  .then(function (response) {
                    // window.location="/theatre/1"
                  });
      
 

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
            console.log(this.reserved)
        }
        
    },
check(row,r){
    var nn=row+'-'+r
    var a=false
 
    this.reserved.forEach(function(rs){
        
           if (rs.name===nn) {
            console.log(rs.name)
           a= true
           }
        
    })
    return a
}
},

mounted(){
    var b=location.pathname
    var a=b.split('/')
    this.id=a[2]
    console.log(this.id)

    
}
}
</script>

<style lang="scss">
.hover{
 background-color:grey;
}
.block{
    display: block;
}
</style>