<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Vue';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile("https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js",['position'=>View::POS_HEAD]);
//$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js",['position'=>View::POS_HEAD]);
?>
<div class="site-vue">
    <div id="app">
        <div id="grid">
            <div>
                <span>horizontal divisions</span>
                <button @click="columsandrows([rows+1,cols])">more</button>
                <button @click="columsandrows([rows-1,cols])"> less </button>
            </div>
            <div>
                <span>vertical divisions</span>
                <button @click="columsandrows([rows,cols+1])">more</button>
                <button @click="columsandrows([rows,cols-1])"> less </button>
            </div>
        </div>
        <div id="card">
            <div id="base">
            </div>
        </div>
            <div id="menu"><div id="elemhead">
                <select id="element" v-model="active" @change="unselect">
                    <option value="base">background</option>
                    <option value="name">name</option>
                    <option value="image">image</option>
                    <option value="cost">cost</option>
                    <option value="health">health</option>
                    <option value="atk">damage</option>
                    <option value="descritpion">description</option>
                    <option value="atributes">atributes(type/faccion/race/class)</option>
                </select>
            </div>
            <div id="elembody">
                <div v-if="active!='base'">
                    <span>include</span>
                    <label for="yes">yes</label>
                    <input type="radio" name="display" id="yes" v-on:change="create(true)"> 
                    <label for="no">no</label>
                    <input type="radio" name="display" id="no" v-on:change="create(false)">
                </div>
                <div>
                    <label for="rounded">rounded</label>
                    <input type="range" id="rounded" v-model="radio" min="0" max="50" step="1" v-on:change="rounded">
                </div>
                
                <div v-if="active!='base'">
                    <label for="up">a: horizontal axis</label>
                    <input type="range" id="up" v-model="up" min="1" v-bind:max="rows+1" step="1" @change="ubicar">
                </div>
                
                <div v-if="active!='base'">
                    <label for="down">a: vertical axis</label>
                    <input type="range" id="down" v-model="down" min="1" v-bind:max="cols+1" step="1" @change="ubicar">
                </div>
                <div v-if="active!='base'">
                    <label for="right">b: horizotal axis</label>
                    <input type="range" id="right" v-model="right" min="1" v-bind:max="rows+1" step="1" @change="ubicar">
                </div>
                
                <div v-if="active!='base'">
                    <label for="left">b: vertical axis</label>
                    <input type="range" id="left" v-model="left" min="1" v-bind:max="cols+1" step="1" @change="ubicar">                    
                </div>
                
                <div> 
                    <span>back/foward</span>
                    <button @click="zindex = zindex + 1">more</button>
                    <button @click="zindex = zindex + 1">less</button>
                </div>
                <div>
                    <label for="thckness" >border width</label>
                    <input type="range" id="thickness" v-model="borderwidth" min="0" max="10" step="1" @change="borde">
                </div>
                
                <div>
                    <label for="bordercolor">border color</label>
                    <input type="color" id="bordercolor" v-model="bordercolor" @change="borde">
                </div>
                <div>
                    <label for="innercolor">element color</label>
                    <input type="color" id="innercolor" v-model="backgroundcolor" @change="innercolor">
                </div>
            </div>
        </div>
    </div>
</div>
<style>
*{
    margin:0;
    padding:0;
}
body{
    perspective:1000px;
}
#app{
    width:100%;
    min-height:100vh;
    background-color: lightblue;
    display:grid;
    grid-template-columns:1fr 1fr 1fr;
    column-gap:15px;
}
#card{
    display:grid;
    justify-items:center;
    align-items:center;
    
}
#base{
    transform-style:preserve-3d;
    display:grid;
    background-color: lightcoral;
    width:375px;
    height:525px;
    box-shadow:0 20px 20px rgba(0,0,0,0.2), 0px 0px 50px rgba(0,0,0,0.2);
    border-radius:30px;
    overflow: hidden;
}
#menu{
    display:grid;
    grid-template-rows: 1fr 10fr;
}
#elemhead{
    display:grid;
    align-items:center;
}

#elembody{
    display:grid;
    grid-template-rows:repeat(10,1fr);
}

</style>
<script>
    //VUE
    var app = new Vue({
        el: '#app',
        data: {
            elements:[],
            rows:10,
            cols:10,
            active:"base",
            radio:0,
            up:1,
            down:1,
            right:1,
            left:1,
            zindex:1,
            borderwidth:0,
            bordercolor:'#000000',
            backgroundcolor:'#000000'
        },
    methods: {
        create: function(e){
            var activ = this.active;
            var base = document.getElementById("base");
            var instancia = document.getElementById(activ);
            if(e){
                if(!instancia){
                  var element = document.createElement("div");
                    element.setAttribute("id",activ);
                    base.appendChild(element); 
                    document.getElementById(this.active).style.backgroundColor=this.backgroundcolor;
                    this.elements.push({name:this.active,radio:this.radio,up:this.up,
                    down:this.down,right:this.right,left:this.left,zindex:this.zindex,borderwidth:this.borderwidth,
                    bordercolor:this.bordercolor,backgroundcolor:this.backgroundcolor,rows:this.rows,cols:this.cols});
                    
                }
            }else{
                if(instancia){
                for(var i=0;i<this.elements.length;i++){
                    if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                        this.elements.splice(i,1);
                    }
                }    
                base.removeChild(instancia); 
                }
            }   
        },
        innercolor: function(){
            document.getElementById(this.active).style.backgroundColor=this.backgroundcolor;
        },
        rounded: function(){
            document.getElementById(this.active).style.borderRadius=(this.radio+"%");
        },
        ubicar: function(){
            console.log(this.up+"/"+this.right);
            console.log(this.down+"/"+this.left);
            document.getElementById(this.active).style.gridColumn=(this.up+"/"+this.right);
            document.getElementById(this.active).style.gridRow=(this.down+"/"+this.left);
        },
        unselect: function(){
            document.querySelectorAll('[name=display]').forEach((x)=> x.checked=false);
            this.radio=0,
            this.up=1,
            this.down=1,
            this.right=1,
            this.left=1,
            this.zindex=1,
            this.borderwidth=0,
            this.bordercolor='#000000',
            this.backgroundcolor='#000000'
        },
        borde: function(){
            document.getElementById(this.active).style.border=(this.bordercolor+" "+this.borderwidth+"px solid");
        },
        columsandrows: function(e){
            this.rows=e[0];
            this.cols=e[1];
            let carta=document.getElementById('base');
            carta.style.gridTemplateColumns=`repeat(${this.rows}, 1fr)`;
            carta.style.gridTemplateRows=`repeat(${this.cols}, 1fr)`;
        }
    },
    computed:{
        
    },
    mounted(){
        let carta=document.getElementById('base');
        let container=document.getElementById('app');

        container.addEventListener('mousemove', e => {
            let xAxis= (window.innerWidth / 2 - e.pageX) / 25;
            let yAxis= (window.innerHeight / 2 - e.pageY) / 25; 
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`
        });
        container.addEventListener('mouseleave', e => {
        card.style.transform=`rotateY(0deg) rotateX(0deg)`;
        card.style.transition='all 0.5s ease';
        });
        container.addEventListener('mouseenter', e => {
            card.style.transition='none';
        });
        
        var x=10;
        var y=10;

        carta.style.gridTemplateColumns=`repeat(${x}, 1fr)`;
        carta.style.gridTemplateRows=`repeat(${y}, 1fr)`;




        fetch("/apiv1/elements",{
            method:"GET",
            headers:{
                'Content-Type':'application/json'
            }
        }).then(function(resp){
            return resp.json();
        }).then(function(datos){
            //app.message=datos;
            console.log(datos);
        })
        /*
        axios.get('/apiv1/users')
        .then(function (response) {
            
            //console.log(response.data);
            app.message=response.data;
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });
        */
    }
    });
    
</script>


