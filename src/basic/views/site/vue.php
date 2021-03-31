<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Vue';
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
<!-- Borrar -->
            <div id="borramepto">
                Example font for test, use only one font for template.
            </div>
            <label for="font">fonts</label>
            <select v-model="selectedfont" @change="fuentes" id="font">
                <option v-for="font in fonts" :value="font">{{font}}</option>
            </select>
            <button @click="submitted">submit</button>
            <button @click="getteding">get</button>
<!-- Hasta aca -->
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
                    <button @click="create" class="bigbang">{{ created?'destroy':'create' }}</button>
                </div>
                <div>
                    <label for="rounded">rounded</label>
                    <div >
                        <button @click="activecorner('topleft')">┌</button>
                        <button @click="activecorner('topright')">┐</button>
                        <button @click="activecorner('all')">■</button>
                        <button @click="activecorner('bottomright')">└</button>
                        <button @click="activecorner('bottomleft')">┘</button>
                    </div>
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
                
                <div v-if="active!='base'"> 
                    <span>back/foward</span>
                    <button @click="indexz(zindex+1)">more</button>
                    <button @click="indexz(zindex-1)">less</button>
                </div>
                <div>
                    <label for="thckness" >border width</label>
                    <input type="range" id="thickness" v-model="borderwidth" min="0" max="10" step="1" @change="borde">
                </div>
                <div v-if="active!='base' && active!='image'">
                    <label for="fontsise">font size</label>
                    <input type="range" id="fontsise" v-model="fontsize" min="5" max="30" step="1" @change="estilofuentes">
                </div>
                <div>
                     <span>colors</span>
                    <label for="bordercolor">border</label>
                    <input type="color" id="bordercolor" v-model="bordercolor" @change="borde">
                    <label for="innercolor">element</label>
                    <input type="color" id="innercolor" v-model="backgroundcolor" @change="innercolor">
                    <div v-if="active!='base' && active!='image'">
                        <label for="fuentecolor">font</label>
                        <input type="color" id="fuentecolor" v-model="fontcolor" @change="estilofuentes">
                    </div>
                </div>
                <div v-if="active!='base' && active!='image'">
                    <label for="centertext"> center text? </label>
                    <button @click="aligned" id="centertext">left</button>
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
    grid-template-rows:repeat(11,1fr);
    align-items:center;
}
#element{
    height:100%;
    font-size:1.6em;
    text-align-last: center;
    -moz-text-align-last: center;
}
#base div{overflow: hidden;}
.bigbang{
    width:100%;
}
.elementor{
    display:grid;
    align-items:center;
}
</style>
<script>
    //VUE
    var app = new Vue({
        el: '#app',
        data: {
            selectedfont:"Liberation Sans",
            fonts:["Liberation Sans","aakar,medium","Abyssinica SIL","Ani","AnjaliOldLipi","Bitstream Charter","Bitstream Vera Sans","Chandas","Chilanka","DejaVu Sans","DejaVu Serif","Dyuthi","FreeMono","FreeSans","FreeSerif","Gargi","Garuda","Jamrul","Kalimati","Karumbi","Keraleeyam","Khmer OS","Laksaman","Liberation Mono","Liberation Serif","Likhan","Loma","Manjari","Meera","Mitra Mono","Mukti Narrow","Nakula","Norasi","Noto Mono","Padauk","Pagul","Purisa","Samanata","Sarai","Sawasdee","Tlwg Mono","Ubuntu","Umpush","Uroob, Bold","Waree"],
            corner:"all",
            created:false,
            elements:[{name:"base",borderwidth:0,bordercolor:'#000000',
                innercolor:'#f08080',radiolt:0,radiort:0,
                radiolb:0,radiorb:0}],
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
            backgroundcolor:'#000000',
            fontsize:10,
            fontcolor:'#000000',
            textalign:"left"
        },
    methods: {
        create: function(){
            var base = document.getElementById("base");
            var instancia = document.getElementById(this.active);
                if(!instancia){
                    this.created=true;
                    var element = document.createElement("div");
                    element.setAttribute("id",this.active);
                    element.setAttribute("class","elementor");
                    base.appendChild(element); 
                    document.getElementById(this.active).style.backgroundColor=this.backgroundcolor; 
                }else{
                base.removeChild(instancia);
                this.created=false;
                }
            this.update();
        },
        innercolor: function(){
            document.getElementById(this.active).style.backgroundColor=this.backgroundcolor;
            for(var i=0;i<this.elements.length;i++){
                if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                    this.elements[i].innercolor=this.backgroundcolor;
                }
            }
        },
        rounded: function(){
            switch(this.corner){
                case "all":
                    document.getElementById(this.active).style.borderRadius=(this.radio+"%");
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements[i].radiolt=this.radio;
                            this.elements[i].radiolb=this.radio;
                            this.elements[i].radiort=this.radio;
                            this.elements[i].radiorb=this.radio;
                        }
                    }
                break;
                case "topleft":
                    document.getElementById(this.active).style.borderTopLeftRadius=(this.radio+"%");
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements[i].radiolt=this.radio;
                        }
                    }
                break;
                case "topright":
                    document.getElementById(this.active).style.borderTopRightRadius=(this.radio+"%");
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements[i].radiort=this.radio;
                        }
                    }
                break;
                case "bottomleft":
                    document.getElementById(this.active).style.borderBottomRightRadius=(this.radio+"%");
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements[i].radiorb=this.radio;
                        }
                    }
                break;
                case "bottomright":
                    document.getElementById(this.active).style.borderBottomLeftRadius=(this.radio+"%");
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements[i].radiolb=this.radio;
                        }
                    }
                break;
            }
            
        },
        ubicar: function(){
            document.getElementById(this.active).style.gridColumn=(this.up+"/"+this.right);
            document.getElementById(this.active).style.gridRow=(this.down+"/"+this.left);
            for(var i=0;i<this.elements.length;i++){
                    if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                        this.elements[i].axisx1=this.up;
                        this.elements[i].axisx2=this.down;
                        this.elements[i].axisy1=this.left;
                        this.elements[i].axisy2=this.right;
                    }
            }

        },
        unselect: function(){
            this.radio=0,
            this.up=1,
            this.down=1,
            this.right=1,
            this.left=1,
            this.zindex=1,
            this.borderwidth=0,
            this.bordercolor='#000000',
            this.backgroundcolor='#000000',
            this.corner="all"
            if(document.getElementById(this.active)!=null){
                this.created=true;
            }else{
                this.created=false;
            }
        },
        borde: function(){
            document.getElementById(this.active).style.border=(this.bordercolor+" "+this.borderwidth+"px solid");
            for(var i=0;i<this.elements.length;i++){
                            if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                                this.elements[i].bordercolor=this.bordercolor;
                                this.elements[i].borderwidth=this.borderwidth;
                            }
            }
        },
        columsandrows: function(e){
            this.rows=e[0];
            this.cols=e[1];
            let carta=document.getElementById('base');
            carta.style.gridTemplateColumns=`repeat(${this.rows}, 1fr)`;
            carta.style.gridTemplateRows=`repeat(${this.cols}, 1fr)`;
        },
        indexz: function(e){
            if(e>=1){
                this.zindex=e;
                document.getElementById(this.active).style.zIndex=this.zindex;  
                for(var i=0;i<this.elements.length;i++){
                    if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                        this.elements[i].axisz=this.zindex;
                    }
                }
            }
        },
        activecorner: function(a){
            this.corner=a;
        },
        update: function(){
            var instancia = document.getElementById(this.active);
            if(instancia){
                    this.elements.push({name:this.active,axisx1:this.up,axisx2:this.down,axisy1:this.right,
                    axisy2:this.left,axisz:this.zindex,borderwidth:this.borderwidth,bordercolor:this.bordercolor,
                    innercolor:this.backgroundcolor,radiolt:this.radio,radiort:this.radio,
                    radiolb:this.radio,radiorb:this.radio,fontcolor:this.fontcolor,fontsize:this.fontsize,
                    textalign:this.textalign});  
                }
                if(!instancia){
                    for(var i=0;i<this.elements.length;i++){
                        if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                            this.elements.splice(i,1);
                        }
                    }    
                }
        },
        fuentes: function(){
            var texto=document.getElementById("borramepto");
            texto.style.fontFamily =this.selectedfont;
            document.getElementById("base").style.fontFamily =this.selectedfont;
        },
        estilofuentes: function(){
            if(this.active!="base" && this.active!="image"){
                if(this.active=="damage" || this.active=="health" || this.active=="cost"){
                    document.getElementById(this.active).innerHTML="10";
                }else{
                  document.getElementById(this.active).innerHTML="Example text";   
                }
            } 
            var texto=document.getElementById(this.active);
            texto.style.fontSize=(this.fontsize/10)+"em";
            texto.style.color=this.fontcolor;
            for(var i=0;i<this.elements.length;i++){
                    if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                        this.elements[i].fontsize=this.fontsize;
                        this.elements[i].fontcolor=this.fontcolor;
                    }
            }
        },
        aligned: function(){
            if(this.textalign=="left"){
                this.textalign="center"
                document.getElementById("centertext").innerHTML="center";
            }else if(this.textalign=="center"){
                this.textalign="right"
                document.getElementById("centertext").innerHTML="right";
            }else if(this.textalign=="right"){
                this.textalign="left"
                document.getElementById("centertext").innerHTML="left";
            }
            document.getElementById(this.active).style.textAlign=this.textalign;
            for(var i=0;i<this.elements.length;i++){
                if(this.elements[i]==this.elements.find(t=>t.name == this.active)){
                    this.elements[i].textalign=this.textalign;
                }
            }
        },
        submitted: function(){
            for(let i=0;i<this.elements.length;i++){
                fetch("/apiv1/elements",{
                    method:"POST",
                    headers:{
                        'Content-Type':'application/json'
                    },
                    body: JSON.stringify(this.elements[i])
                    })
                    .then((response) => {
                        if (response.ok) {
                            console.log("registered successfully!");
                            return response.json();
                        } else {
                            throw new Error('Something went wrong');
                           }
                    })
                    .catch((error) => {
                        console.log("failed to register :(");
                        console.log(error);
                    });
            }
        },
        getteding:function(){
            
            fetch("/apiv1/elements\?fields\=id",{
            method:"GET",
            headers:{
                'Content-Type':'application/json'
            }
            }).then(function(resp){
                return resp.json();
            }).then(function(datos){
                console.log(datos);
            })/* no anda
            fetch("/apiv1/elements\?id\=7",{
            method:"GET",
            headers:{
                'Content-Type':'application/json'
            }
            }).then(function(resp){
                return resp.json();
            }).then(function(datos){
                console.log(datos);
            })*/
        }
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



        /*
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
        */
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


