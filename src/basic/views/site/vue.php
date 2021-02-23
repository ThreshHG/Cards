<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Vue';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile("https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js",['position'=>View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js",['position'=>View::POS_HEAD]);
?>
<div class="site-vue">
    <div id="app"  >
    <div v-for="msg in message">
        {{ msg.id }} - {{ msg.username }}
    </div>
    </div>
</div>
<div></div>
<script>



    var app = new Vue({
        el: '#app',
        data: {
            message:[]
        },
    methods: {
    },
    computed:{

    },
    mounted(){
        fetch("/apiv1/users",{
            method:"GET",
            headers:{
                'Content-Type':'application/json'
            }
        }).then(function(resp){
            return resp.json();
        }).then(function(datos){
            app.message=datos;
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
    })
</script>

