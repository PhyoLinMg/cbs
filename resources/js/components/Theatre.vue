<template>
    <div class="row justify-content-center mt-5">
        <div class=" justify-content-center col-8 col-sm-8 col-md-6 col-lg-5 col-xl-4 theatre" 
        >
        <div class="screen m-auto mb-5" >
            <p class=" text-center">screen</p>
        </div>




        <div class=" mt-5" style="margin-left: 5px">    

            <div v-for="(row,index) in rows" class="row mt-1">




                <div style="display: flex" class=" mr-auto">
                    <span  @click="click1(index,i,row,l)"  :key="i" v-for='(l,i) in lseats'  :title="row+'-'+l">
                        <div  ref="a" :class=" ['a1','colorgreen','ml-1',{ hover :enter}] "></div>
                    </span>
                    

                </div>

                <div style="display: flex" class=" ml-auto">
                    <span  @click="click(index,i,row,r)" :key="i" v-for='(r,i) in rseats'  :title="row+'-'+r">
                        <div  ref="b" :class=" ['a1','colorgreen','ml-1',{ hover :enter}] "></div>
                    </span>
                    

                </div>






                



            </div>

        </div>

        














    </div>







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
            reserve:[]
        }   
    },
    methods:{
        click1(index,i,row,l){
            var count=-1
            var n=row+'-'+l
               if (index==0) {
            if ( this.$refs.a[i].style.background=="black") {
                
                this.reserve.forEach(function(r1){
                    if (r1.name==n) {
                        return count
                    }
                    count++
                })
                console.log(count)
                this.reserve.splice(count,1)
                this.$refs.a[i].style.background="green"
                console.log(this.reserve)

            }
              else{
                this.$refs.a[i].style.background="black"
                this.reserve.push({
                    'rindex':index,
                    'cindex':i,
                    'name':row+'-'+l
                })
                console.log(this.reserve)
            }
        }
        else{
             var a=(index*5)+(i+1)
            if ( this.$refs.a[a-1].style.background=="black") {
                
                this.reserve.forEach(function(r1){
                    if (r1.name==n) {
                        return count
                    }
                    count++
                })
                 console.log(count)
                this.reserve.splice(count,1)
                this.$refs.a[a-1].style.background="green"
                  console.log(this.reserve)

            }
              else{
                this.$refs.a[a-1].style.background="black"
                this.reserve.push({
                    'rindex':index,
                    'cindex':i,
                    'name':row+'-'+l
                })
                console.log(this.reserve)
            }

             
        }
    }
,
        click(index,i,row,l){
            var count=-1
            var n=row+'-'+l
               if (index==0) {
            if ( this.$refs.b[i].style.background=="black") {
                
                this.reserve.forEach(function(r1){
                    if (r1.name==n) {
                        return count
                    }
                    count++
                })
                console.log(count)
                this.reserve.splice(count,1)
                this.$refs.b[i].style.background="green"
                console.log(this.reserve)

            }
              else{
                this.$refs.b[i].style.background="black"
                this.reserve.push({
                    'rindex':index,
                    'cindex':i,
                    'name':row+'-'+l
                })
                console.log(this.reserve)
            }
        }
        else{
             var a=(index*5)+(i+1)
            if ( this.$refs.b[a-1].style.background=="black") {
                
                this.reserve.forEach(function(r1){
                    if (r1.name==n) {
                        return count
                    }
                    count++
                })
                 console.log(count)
                this.reserve.splice(count,1)
                this.$refs.b[a-1].style.background="green"
                  console.log(this.reserve)

            }
              else{
                this.$refs.b[a-1].style.background="black"
                this.reserve.push({
                    'rindex':index,
                    'cindex':i,
                    'name':row+'-'+l
                })
                console.log(this.reserve)
            }

             
        }
    }
},

}
</script>

<style lang="scss">

.a1:hover{
   background-color:grey;
}

</style>